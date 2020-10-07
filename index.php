
<?php
		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\SMTP;
		use PHPMailer\PHPMailer\Exception;

	$msg = "";
	
	if (isset($_POST['submit'])) {

		require_once 'phpmailer/PHPMailer.php';
		require_once 'phpmailer/SMTP.php';
		function sendEmail($to, $from, $fromName, $body) {
			$mail = new PHPMailer();
			$mail->setFrom($from, $fromName);
			$mail->addAddress($to);
			$mail->Subject = 'Doula Inquiry';
			$mail->Body = $body;


			return $mail->send();

		}
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$body = $_POST['message'];

		if (sendEmail('samanthakvance@gmail.com', $email, $name, $body)) {
			$msg = 'Email sent!';
		} else 
			$msg = 'Email failed!';
	}

?>


<!DOCTYPE html>
<html>
<head>
<title>Mama Llama Doula</title>

<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no"/>
<meta name = "description" content="Mama Llama Doula Birth Services' Samantha Vance is a Birth Doula, Childbirth Educator, and Lactaion Educator with a Bachelors degree in Nutrition. 
Samantha loves supporting families as they journy through pregnancy, birth, and parenthood. 
She believes every family deserves to feel heard, respected and cared for no matter where they birth. She serves Temecula, Murrieta, Hemet, French Valley, Wildomar, and Menifee.'">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src= "./javascript.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel ="stylesheet" href="./style.css" type = "text/css">

    <!--Need meta tags (SEO) -->

</head>

<body>
<div class = "container">
    <div class = "header" id = "header">
        <div class = "header-logo">
            <img id = "logo" src = "/Images/Mama-Llama-logo.png" width = 300>
        </div>
        <div class = "navbar">
            <a class="burger-nav"><i class="fa fa-bars" id="burger"></i></a>
            <div class="nav-items">
                <ul>
                    <li><a class ="first-nav" href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Work with Me</a></li>
                    <li><a href="#faqs">FAQ</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="nav-divider">
        </div>
    </div>
    <div class = "main-image" id="about">
        <img src = "./Images/Glacier_Trial2.gif" width = 100%>
        <div class = "image-overlay">
        </div>
    </div>
    <div class = "container-content">
        <div class = "main-content" id = "main-content">
            <div class="doula-definition" >
                <h3>What does a doula do?</h3>
                <p>The Greek word doula means woman caregiver. We now use the term to describe a trained and experienced labor companion who provides the 
                woman and her husband or partner continuous emotional support, physical comfort and assistance in obtaining information before, during, 
                and just after childbirth.</p>
            </div>
            <div class="intro-info" >
                <div class="intro-main">
                    <div class="intro-img">
                        <img src="./Images/Profile_pic3.gif">
                    </div>
                    <div class="intro-content">
                        <h3>Hi, I'm Samantha <br />and I'm so happy you're here!</h3><br>
                        <p></p>
                        
                        <p>In addition to being a birth doula, I am also a certified lactation educator, an ICEA-trained childbirth educator, and a degreed nutritionist. I graduated from Cal Poly San Luis Obispo with a B.S. in Applied Nutrition. 
                        It was in the class, "Maternal and Child Nutrition" that I first discovered my interest in pregnancy, birth, breastfeeding, and post-partum care.</p>
                        <br />
                        <br />
                        <p>I am naturally compassionate, energetic, and supportive. I feel fulfilled when I help others achieve their goals. It is an immense honor to witness a birth and I feel incredibly 
                        blessed to walk beside families during this exciting and life-changing time.</p>
                        <br>
                    </div>
                </div>
            </div>
            <div class="doula-bulletpoints">
                <h3>As a doula...</h3>
                <ul>
                    <li>I recognize birth as a key life experience that the mother will remember all her life.</li>
                    <li>I understand the physiology of birth and the emotional needs of a woman in labor.</li>
                    <li>I assist the woman and her partner in preparing for and carrying out their plans for the birth.</li>
                    <li>I stay by the side of the laboring woman throughout the entire labor.</li>
                    <li>I provide emotional support, physical comfort measures, an objective viewpoint, and assistance to the woman in getting the information she needs to make good decisions.</li>
                    <li>I facilitate communication between the laboring woman, her partner, and clinical care providers.</li>
                    <li>I perceive my role as one who nurtures and protects the woman's memory of her birth experience.</li>
                </ul>
            </div>
          </div>
        </div>
    <div class="consultation-main">
        <div class="consultation-content">
            <div class="consultation-text">
                <p>Schedule your free birth consultation </p>

            </div>
            <div class="consultation-button"id="services">
                <button type="button" id="consultation">Contact Me</button>
            </div>
        </div>
    </div>
    <div class="main-content2">
        <div class = "services-main">
          <p class = "services-title">Services Offered </p>
          <div class = "info-services">
            <div class = "service-content service-one">
                <h3>Prenatal Visits</h3>
              <p>The purpose of the prenatal visits is to become acquainted and comfortable with one another and to gather important information about your plans, 
                preferences and decisions. Our first visit usually takes place two or more months before your estimated birth date. We will meet 2-3 times and I 
                will be available for generous support via email, text or phone. I am officially on call for you 24/7 the month before your estimated birth date.</p>
              <br />
                <br /><p>I will be available to answer any questions that you might have via phone, text or email. I am here for you and I love being there for you no matter the time or the reason. I book a maximum of two births a month which allows me to give you the time and attention you will need during this exciting journey.</p>
            </div>
            <div class = "service-content service-two">
                <h3>Labor</h3>
              <p>I prefer that you call me when you think you are in labor, even if you do not yet need me. I can answer questions and make suggestions over the phone. 
                We will decide if I should come right then or wait for further change. I usually need approximately one hour to get to you from the time you ask me to come. 
                We will also decide where to meet at your home, the hospital, or birth center. Except for extraordinary circumstances, I will remain with you throughout 
                labor and birth. I will remain with you for one to two hours after birth, until you are comfortable and your family is ready for quiet time together. I can 
                also help with initial breastfeeding, if necessary.</p>
            </div>
            <div class = "service-content service-three" >
                <h3>Postpartum Visits</h3>
              <p id="faqs">I will be available to answer questions about your birth and would like to visit you within a few weeks to see how you and your baby are doing, 
                to review the birth, and to get feedback from you about my role. I will maintain my role as your doula until six weeks postpartum. After that, you can just 
                call me your friend!</p>
            </div>
          </div>
        </div>
        <div class="faqs">
            <div class="faqs-title">Frequently Asked Questions </div>
            <div class ="faq" id="faq0">
                <h3>Q </h3><p>Do you make decisions for me?</p><br />
                <h4>A </h4><p>
                    I do not speak for you or make decisions for you. However, I do advocate for your wishes as expressed in your birth plan, 
                in prenatal conversations, and intrapartum discussion by encouraging you to ask questions of your care provider and to express 
                your preferences and concerns. As your doula, I will help you incorporate changes in plans if and when the need arises. My goal is to 
                enhance the communication between you and your care provider. In summary, my advocacy role is best described as support, information, 
                and mediation or negotiation.
                </p>
            </div>
            <div class ="faq" id="faq1">
                <h3>Q </h3><p>Do you replace my partner?</p><br />
                <h4>A </h4><p>
                    No, my job is to enhance your birth experience. I will be there for both you and your partner. During labor, it is easy to forget everything you learned in your birth classes. I will gently remind and show your birth partner how they can best assist you during labor. Likewise, I can also take the pressure off of your partner when they need a break. Maintaining your relationship and giving you both the best experience possible while making sure the mama feels 100% supported is my number one goal.
                </p>
            </div>        
            <div class="faq" id="faq2">
                <h3>Q </h3><p>Does it matter who provides continuous support in labor?</p><br />
                <h4>A </h4><p>
                Studies show that effects are strongest when the person is neither a member of the hospital staff, nor a person in the woman's social network, 
                and is present solely to provide one-on-one supportive care.
                </p>
            </div>
            <div class="faq" id="faq3">
                <h3>Q </h3><p>What does the evidence say about doulas?</p><br />
                <h4>A </h4><p>
                Research shows that women who hire doulas are: 
                    <ul>
                        <li>28% less likely to have a cesarean</li>
                        <li>31% less likely to use synthetic oxytocin (Pitocin) to speed up labor</li>
                        <li>9% less likely to use any pain medication</li>
                        <li>34% less likely to rate their childbirth experience negatively</li>
                    </ul>
                </p>
            </div>
            <div class="faq" id="faq4">
                <h3>Q </h3><p>What factors most contribute to a woman's satisfaction in childbirth?</p><br />
                <h4>A </h4><p>
                Mothers are most satisfied when they are involved in decision-making about their own care and when they have good support and a high-quality relationship with caregivers. 
                </p>
            </div>
            <div class ="faq" id="faq5">
                <h3>Q </h3><p>How many births do you attend each month?</p><br />
                <h4>A </h4><p>I book a maximum of two births per month. This greatly reduces the risk of me missing your birth due to another client going into labor at the same time as you.
                It also ensures that I will be well-rested and ready to support you when you need me the most!</p>
            </div>
            <div class="faq" id="faq6">
                <h3>Q </h3><p>Why do I need a doula if I have a birth partner?</p><br />
                <h4>A </h4><p>
                    As your doula, I may be the only person at your birth besides your partner who is there solely for your emotional well-being. 
The nurse, the doctor, the midwife have other priorities that compete with your emotional care; for example, breaks, shift changes, clinical 
responsibilities, office hours and hospital policies. As your doula, I have no other priorities. I will stay with you through shift changes and until 
your baby is born. Your needs are my sole priority. 
                </p>
            </div>
            <div class="faq" id="faq7">
                <h3>Q </h3><p>Will the doula overshadow my partner and interfere with our intimate experience?</p><br />
                <h4>A </h4><p>
                The doula can actually bring the couple closer. By making sure the partner's needs are met (food, drink, occasional food breaks, 
                and reassurance), the woman and partner can work more closely together. While the doula probably knows more than the partner about 
                birth, hospitals and maternity care, the partner knows more about the woman's personality, likes and dislikes, and needs. Moreover, 
                he or she loves the woman more than anyone else there. The combined contributions of partner and doula, along with a competent, considerate 
                and caring staff give the woman the best chance of an optimal outcome.                
                </p>
            </div>
            <div class="faq-prompt">
                <p>Have more questions?</p></br>
                <p>Contact me!</p>
            </div>
        </div>
        </div> 
        <div class = "contact-container" id = "contact">
          <div class = "contact-content">
            <div class = "contact-info">
              <h2>Connect</h2>
              <div class = "contact-info-specific">
              <p>Samantha Vance</p>
                  <br />
              <p>samanthakvance@gmail.com</p>
              </div>
              <div class = "social">
              <span class="fa-stack fa-2x">

          <i class="fa fa-envelope fa-stack-1x icon"></i>
        </span>
              <span class="fa-stack fa-2x">
          <i class="fa fa-facebook fa-stack-1x icon"></i>
        </span>
              <span class="fa-stack fa-2x">
                  
                  <a href="https://www.instagram.com/mamallamadoula/"><i  class="fa fa-camera-retro fa-stack-1x icon"></i></a>
        </span>
              </div>
            </div>
            <div class = "contact-map">
              <img src = "./Images/Coverage_MapT.png" height = 400px width = 500px>
            </div>
    
            </div>
    </div>
    <div class = "footer">
      <div class = "footer-info">
        <p class = "footer-text">&copy 2018 Mama Llama Doula Services | Designed by Matt Vance</p>
      </div>
    </div>
</div>
<div class="modal form-hide">
    <form class="email-form" method="POST" action="index.php">
        <br>
        <input class="form-name form-entry" type="text" name="name" placeholder="Your name"><br>
        <br>
        <input class="form-email form-entry" type="text" name="email" placeholder="Your email address"><br>
        <br>
<textarea class="form-comment form-entry" name="message" placeholder="Type your message here"></textarea><br><br>
        <input class="form-send form-button" name="submit" type="submit" value="Send">
    </form>
</div>
</body>
</html>
