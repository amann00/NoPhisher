# NoPhisher

## Description:
This is a phishing technique I created for educational purposes and to understand the real-world phishing. I created this technique by myself and want to share it with the GitHub community.
### Why I created it ? 
- As I am totally against Phishing and any malicious activity, I gave it a name "NoPhisher", raising the slogan "Say NO To Phishers".
- I want more and more people aware about the dangers of phishing, identity thefts & cyber frauds. And the most effective way of creating awareness is to show practical proofs. 

![image](https://user-images.githubusercontent.com/66679948/132735843-216b19cd-0c56-49cd-89a2-a9ed6d2f1b82.png)

## Legal disclaimer:
Attacking targets and compromising someone's privacy without their prior mutual consent is illegal. It's the end user's responsibility to obey all applicable laws. So I assume no liability and I am not responsible for any misuse or damage caused by this technique.

## Tools Required:
* **XAMPP:** Xampp is an abbreviation for cross-platform, Apache, MySQL, PHP and Perl, and it helps a local host or server to test its website and clients before releasing it to the main server. Download Link - https://www.apachefriends.org/index.html
* **NGROK :** Ngrok is a cross-platform application which allows you to expose a web server running on your local machine to the internet. The software makes your locally-hosted web server appear to be hosted on a subdomain of ngrok.com, meaning that no public IP or domain name on the local machine is needed. Download Link - https://ngrok.com/download

# How to use ?
1. Open Ngrok website, signup to it and then download it. 
2. Now unzip Ngrok. On Linux or Mac OS you can unzip ngrok from a terminal with the following command : _$ unzip /path/to/ngrok.zip_. On Windows, just double click ngrok.zip to extract it.
3. Copy your 'Authtoken' from Ngrok website assigned for you. Now open Ngrok tool and paste that authtoken and press enter. In Windows, remove './' from command and write 'ngrok.exe' instead. Your authetication is successfully completed.
4. Now install Xampp tool having all default configurations. 
5. Open 'facebook.html' file in a text editor and press Ctrl+F to find 'actions=' text. Now remove everything written inside the double quotes in action="" field and write post.php inside it.
6. Now open Xampp installation folder in C:\ drive and go to 'htdocs' folder. Create a folder named 'www_facebook_com' and copy paste the post.php and facebook.html files inside it. 
7. Now open post.php file and inside the header field, paste URL of any website  of your choice which you want to show to the victim. Save it.
8. Open Xampp Control Panel and start running MySQL and Apache Server. 
9. Now open Ngrok tool, and type command:- 
For Linux - $ ./ngrok http 80
For Windows - $ ngrok.exe http 80
10. Copy the URL generated for you by Ngrok and paste it in Web Browser. After that URL paste the path of the file created by you in 'htdocs'. The facebook login page will open.
11. Send this URL to some other device and open it. Type username and password, and login. You will be taken to a website which you pasted in post.php file.
12. Now a notepad file will be created in m_facebook_com folder inside htdocs, and the username and password you typed will be stored inside it. 
13. **Spoiler alert :** The password will be saved as an encrypted text or ciphertext due to encryption of facebook. To decrypt this code there is some other technique but I can't reveal that here.

## Conclusion: 
Phishing is one of the most dangerous threats to your online accounts and data, because these kind of exploits hide behind the guise of being from a reputable company or person, and use elements of social engineering to make victims far more likely to fall for the scam.

# 10 Ways To Prevent Phishing Attacks:
1. Know what a phishing scam looks like
2. Don’t click on that link
3. Get free anti-phishing add-ons
4. Don’t give your information to an unsecured site
5. Rotate passwords regularly
6. Don’t ignore those updates
7. Install firewalls
8. Don’t be tempted by those pop-ups
9. Don’t give out important information unless you must
10. Have a Data Security Platform to spot signs of an attack
