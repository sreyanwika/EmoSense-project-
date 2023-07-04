import socket
import threading

HOST = '127.0.0.1'
PORT = 90

server = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
server.bind((HOST, PORT))

server.listen()

clients = []
nicknames = []

# broadcast
def broadcast(message):
    for client in clients:
        client.send(message)

def handle(client):
    while True:
        try:
            message = client.recv(1024)
            print("{nicknames[clients.index(client)]}")
            broadcast(message)
        except:
            index = clients.index(client)
            clients.remove(client)
            client.close()
            nickname = nicknames[index]
            nicknames.remove(nickname)
            break

def receive():
    while True:
        client, address = server.accept()
        

        client.send("".encode('utf-8'))
        nickname = client.recv(1024)

        nicknames.append(nickname)
        clients.append(client)

        print("Nickname of the client is {nickname}")
        broadcast("{nickname} connected to server!\n".encode('utf-8'))
        

        thread = threading.Thread(target=handle, args=(client,))
        thread.start()

print("server running!...")
receive()