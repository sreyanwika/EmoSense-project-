# EmoSense-project-

ABSTRACT
This project is combination of three interfaces one is music chatbot with
emotion detection, chat application, video call interface. In this project we,
would be combining multiple services and open-source tools to make a chatbot
that suggests song based on the tone of the conservation on which the user is
having with the Chatbot. It could live in any major chat applications like
Facebook Messenger, Slack, Telegram, Text Messages, etc. We would be
building an extensive Chatbot service, to which we can talk to. And talking to a
chatbot wouldn't be business-driven. It would just be casual conversations.
Further, on top of it, the chatbot would also be suggesting songs to the user
based on the tone of the user. This song suggestion feature is the use of Last.fm
API, very much similar to the popular Spotify API. Also, for tone/emotion
analysis of the conversation we will be using the IBM Tone Analyzer API.
Collaborating with these types of APIs is very much critical as in today's world
the popular chatbots do much more than simply having a data-driven
conversation to supplement additional user-oriented features. Also, the reason to
choose python to build the chatbot is because python boasts a wide array of
open-source libraries for chatbots, including scikit-learn and TensorFlow. In
this area of technological advancements, songs suggestion based on mood is
much needed at it will help humans relieve stress and listen to song’s according
ii
to their mood. In this project, we have implemented a chatbot that suggests
songs based on the user's text tone. By analyzing the tone of the text expressed
by the user, we can identify the mood. Once the mood is identified, the
application will play songs in the form of a web page (ANVIL) based on the
user's choice as well as his current mood.
Chat application:
Chatting is a method of using technology to bring people and ideas together
despite of the geographical barriers. The technology has been available for years
but the acceptance was quite recent. Our project is an example of a chat server.
It is made up of two applications - the client application, which runs on the
user’s web browser and server application, runs on any hosting servers on the
network. To start chatting client should get connected to server where they can
do private and group chat. Security measures were taken during the last one.

INTRODUCTION

With the explosion of network in the past decades, internet has become the major source of
retrieving multimedia information such as video, books, and music etc. The proposed project is
whole about Emotion, how the interfaces help people to deal with their emotion People have
considered that music is an important aspect of their lives and they listen to music, an activity
they engaged in frequently. However, the problem now is to organize and manage the millions
of music titles produced by society. A good music recommender system should be able to
automatically detect preferences and generate playlists accordingly. The proposed system is to
detect music based on emotion detection similarity. The system extracts input and finds music
that are close to the Emotion of the user. Meanwhile, the development of recommender systems
provides a great opportunity for industry to aggregate the users who are interested in music. We
need to generate the best music recommendation system which is need to predict based on
customization, by Machine Learning and deep learning.
Everyone’s taste in music is unique which means that no matter what music you make,
someone is bound to enjoy listening to it. While the Music industry may favor certain types of
music more than others, it is important to understand that there isn’t a single human culture on
earth that has existed without music. Music is of great benefit to us, regardless of whether we are
renowned recording artists, karaoke singers or merely fans of music. The number of songs
available exceeds the listening capacity of single individual.
Recommender systems are used in a variety of areas, with commonly recognized
examples taking the form of generators for video and music services, product recommenders for
online stores, or content recommenders for social media platforms and open web content
recommenders. These systems can operate using a single input, like music, or multiple inputs
within and across platforms like news, books, and search queries. There are also popular
recommender systems for specific topics like restaurants and online dating. Recommender
systems have also been developed to explore research articles and experts, collaborators, and
financial services. Recommender systems usually make use of either or both collaborative
filtering and content-based filtering (also known as the personality-based approach), as well as
other systems such as knowledge-based systems. Collaborative filtering approaches build a
model from a user's past behavior (items previously purchased or selected and/or numerical
ratings given to those items) as well as similar decisions made by other users.
A chatbot is a software or computer program that simulates human conversation or
EmoSense
School for Information Science Page 3 of 78
"chatter" through text or voice interactions. Users in both business-to-consumer (B2C) and
business-to-business (B2B) environments increasingly use chatbot virtual assistants to handle
simple tasks. Adding chatbot assistants reduces overhead costs, uses support staff time better and
enables organizations to provide customer service during hours when live agents aren't available.
Chatbots have varying levels of complexity, being either stateless or stateful. Stateless chatbots
approach each conversation as if interacting with a new user. In contrast, stateful chatbots can
review past interactions and frame new responses in context. Adding a chatbot to a service or
sales department requires low or no coding. Many chatbot service providers allow developers to
build conversational user interfaces for third-party business applications. A critical aspect of
chatbot implementation is selecting the right natural language processing (NLP) engine. If the
user interacts with the bot through chatting and voice, for example, then the chatbot requires a
speech recognition engine. Business owners also must decide whether they want structured or
unstructured conversations. Chatbots built for structured conversations are highly scripted, which
simplifies proggrammin1g but restricts what users can ask. After doing this implementation we
have added more functionality and data base and a user interface which makes our Music Bot
recommender system more interactive. In this our chatbot greets the user first and chat with the
user and using chat it analyze the sentiments of the user and checks the database on the bases of
emotions gathered from chat an check which mood the user in and then it goes to database and
checks the song related to the zoner user will love to hear the it asks the use to play the song or
continue chat and if the user wants to chat rather than hearing songs so it will move further to
chat with use without recommending the song and after some interval of time it will again ask to
recommend and play song list it gathered from the database. Now if user wants to hear song it
will play the song and create a playlist on the basis of previously heard playlist and ask the user
to play the song from that playlist if user wants to hear it will continue to play songs and if not,
then the user will continue to chat then it will again analyze chat an recommends.
In today's interconnected world, communication plays a vital role in connecting
individuals across distances. With the rise of digital platforms, chat applications have become
immensely popular for instant messaging, collaboration, and social interactions. This project
aims to develop a robust and user-friendly chat application that enables real-time communication
between users. Where users can have chat with unknown without revealing their identity and
knowing others. It helps people to engage and communicating with each other, the vice and the
emotion of a person matters while chatting since the users don’t know anything about others.
EmoSense
School for Information Science Page 4 of 78
1.1 MUSIC CHATBOT
Song based web application to assist user and provide a more personal experience. This Project
includes chatbot which will be trained by combining multiple services and open-source tools to
simulate a human conversion to suggest songs based on the tone of the conversion. The purpose
of chatbot is to support and scale business teams in their relations with customers, it could live
in any major chat applications like Facebook Messenger, Slack, Telegram, Text Messenger, etc.
This project is focused on building a custom chatbot that will be our fundamental step of the
learning curve of building our own professional chatbots. In this project, we would be building
an extensive chatbot service, to which you can talk to and talking to a chatbot would not businessdriven. The suggestion feature is the use of last.fm API, very much similar to the popular Spotify
API & for tone/emotion analysis of the conservation we will be using the IBM Tone Analyzer
API. Collaborating with these types of API is very much critical as in today’s world the popular
chatbots do much more than simply having a data-driven conversation, to supplement additional
user-oriented features. Also, the reason to choose python to build the chatbot is because python
boasts a wide array of open-source libraries for chatbots, including Keras and TensorFlow. It is
great for small data sets and more simple analysis, also python’s libraries are much more
practical. In this area of technological advancements, songs suggestion based on mood is much
needed at it will help humans relieve stress and listen to song’s according to their mood. In this
project, we have implemented a chatbot that suggests songs based on the user's text tone. By
analyzing the tone of the text expressed by the user, we can identify the mood. Once the mood is
identified, the application will play songs in the form of a web page (ANVIL) based on the user's
choice as well as his current mood.
1.2 REQUIREMENTS
1.2.1 Backend Tools
1 Song’s Suggestion Last.fm songs API
2 Emotional Analysis IBM Tone Analyzer API
EmoSense
School for Information Science Page 5 of 78
1.2.2 Frontend tools:
1 User Interface Anvil Framework
2 Language Python-3
3 Run On Google Colaboratory, PyCharm, VS code
4 Testing API Postman Version-9.18.3
1.3 CHAT APPLICATION
The objective of this is to create a chat application that allows users to send messages, share files,
and engage in group conversations seamlessly. The application will provide a user-friendly
interface, ensuring a smooth and intuitive user experience. By leveraging modern technologies,
the chat application will enable real-time communication, fostering connections and enhancing
collaboration among individuals.
Key Features:
1. User Registration and Authentication: Users can create accounts and log in securely to access
the chat application.
2. One-on-One Messaging: Users can send text messages, emojis, and multimedia content to
other users privately.
