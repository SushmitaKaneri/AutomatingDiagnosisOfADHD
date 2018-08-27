# Automating Diagnosis Of ADHD
Few tests based on DSM 5 have been automated in following test. The idea has Copyrights ©Sushmita Rajendra Kaneri but the code is open for use.

#Overview
This application runs 3 test
1) Completing task of matching shapes to their correct impressions. While performing this task, pictures of the user would be taken and then classified into facial expressions shown.
2) Responding to audio/visual words by correctly entering them
3) Questionnaire for informants (Parents/Teacher)
Once these tests are performed, a screen for Consultant details is opened where after entering the Email, a mail of the corresponding patient would be send to the Consultant

#File Structure
-Demo
|
|
---test1.mp4                      (Demonstrates Test 1)
---test2.mp4                      (Demonstrates Test 2)
---test3.mp4                      (Demonstrates Test 3)

-Image Processing
|
|
---detection.py                   (Detect face and recognize facial expression)
---file0.txt                      (Logs report of facial expression shown)
---lbpcascade_frontalface.xml     (LPBH classifer)

-Web Application
|
|
---home.html                      (From localhost open this page to get started with the application)
Rest of the files in this folder can be related based on the links in respective pages.

#Configuring XAMPP Server to facilitate mail sending

Follow the answer given by nix9 according to your OS:
https://stackoverflow.com/questions/38842072/how-can-i-setup-xampp-for-smtp-outgoing-email-on-a-unix-machine

