<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <style>
        /* Reset some default styles */
body, ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

.logo {
            text-align: left;
            margin-top: 0px;
            padding-left:10px ;
        }

        .logo img {
            height: 120px;
            width: 300px;
        }
/* Style the navigation menu */
.tab ul {
    background-color: #333;
    text-align: left;
}

.tab ul li {
    display: inline-block;
    position: relative;
    padding-right: 100px;
}

.tab ul li a {
    display: block;
    color: #fff;
    text-decoration: none;
    padding: 20px 20px;
    width: 100px;
}

.tab ul li:hover a {
    background-color: goldenrod;
}

/* Style the dropdown menus */
.tab ul ul {
    display: none;
    position: absolute;
    background-color: #333;
}

.tab ul li:hover ul {
    display: block;
    left: 0;
    width: 200px;
}

.tab ul ul li {
    display: block;
    border-bottom: 1px solid #777;
}

.tab ul ul li:last-child {
    border-bottom: none;
}

.tab ul ul li a {
    padding: 10px 20px;
}

.tab ul ul li:hover a {
    background-color: #555;
}

#acc{
    margin: 100px auto;
    width: 600px;
}

#acc li{
    list-style: none;
    width: 100%;
    margin-bottom: 10px;
    background-color: rgb(238, 242, 244);
    padding: 15px;
    border-radius: 10px
}

#acc li label{
    padding: 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 18px;
    font-weight: 700;
    cursor: pointer;
    color: rgb(11, 5, 5);
}

#acc li label span{
    transform: rotate(90deg);
    font-size: 20px;
    color: #333;
}

#acc label + input[type="radio"]{
    display: none;
}

#acc .content{
    padding: 0 10px;
    line-height: 26px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.5sec;
}

#acc label + input[type="radio"]:checked + .content{
    max-height: 400px;
}
.dropdown{
            max-height: 500px;
            overflow: auto;
        }
.drop{
            max-height: 500px;
            overflow: auto;
            max-width: 140px;
        }
    </style>
</head>
<body style="background-color:#E9E1CE">
<div class="logo" >
        <img src="mainlogo.png" >
    </div>
    <div class="tab">
        <ul>
            <li><a href="Home.php">Home</a></li>
            <li><a href="AboutUs.php">About us</a></li>
            <li>
                <a href="case.php">Case Status</a>
                <ul class="dropdown" style="width: 140px;">
                    <li><a href="Case.php">Andhra Pradesh</a></li>
                    <li><a href="Case.php">Arunachal Pradesh</a></li>
                    <li><a href="Case.php">Assam</a></li>
                    <li><a href="Case.php">Bihar</a></li>
                    <li><a href="Case.php">chhattisgarh</a></li>
                    <li><a href="Case.php">Goa</a></li>
                    <li><a href="Case.php">Gujarat</a></li>
                    <li><a href="Case.php">Haryana</a></li>
                    <li><a href="Case.php">Himachal Pradesh</a></li>
                    <li><a href="Case.php">Jharkhand</a></li>
                    <li><a href="Case.php">Karnataka</a></li>
                    <li><a href="Case.php">Kerala</a></li>
                    <li><a href="Case.php">Madhya Pradesh</a></li>
                    <li><a href="Case.php">Manipur</a></li>
                    <li><a href="Case.php">Meghalaya</a></li>
                    <li><a href="Case.php">Mizoram</a></li>
                    <li><a href="Case.php">Nagaland</a></li>
                    <li><a href="Case.php">Odisha</a></li>
                    <li><a href="Case.php">Punjab</a></li>
                    <li><a href="Case.php">Rajasthan</a></li>
                    <li><a href="Case.php">Sikkim</a></li>
                    <li><a href="Case.php">Tamil Nadu</a></li>
                    <li><a href="Case.php">Telangana</a></li>
                    <li><a href="Case.php">Tripura</a></li>
                    <li><a href="Case.php">Uttar Pradesh</a></li>
                    <li><a href="Case.php">Uttarakhand</a></li>
                    <li><a href="Case.php">West Bengal</a></li>
                </ul>
            </li>
            <li><a href="Login.php" target="_blank">Login</a></li>
            <li><a href="ContactUs.php">Contact us</a></li>
            <li><a href="FAQ.php">FAQ</a></li>
        </ul>
    </div>
    <div><h1 style="text-align: center; font-size:30px; letter-spacing:2px">FAQ</h1></div>
    <div style="font-size: 20px;">
        <ul id="acc">
            <li>
                <label for="first">Q:What is the purpose of this e-portal?<span>&#x3e;</span></label>
                <input type="radio" name="a" id="first" checked>
                <div class="content">A:The e-portal's primary purpose is to streamline case management hearings in India. It aims to provide 
                    a centralized platform for accessing case information, communicating with legal professionals, and ensuring transparency 
                    in the legal process.</div>
            </li>
            <li>
                <label for="second">Q: How do I access the e-portal?
                    <span>&#x3e;</span></label>
                <input type="radio" name="a" id="second" >
                <div class="content">
                    A: Access to the e-portal is based on user roles:
Judges, Advocates, and Staff can log in using their employee ID and graphical password for secure access.
<p><ul> Members of the public can access the e-portal's limited features:</ul></p>
Check Case Status: Select your state and search for case status using various criteria.
Get Legal Process Clarifications: Refer to FAQs for answers to common legal process questions.</div>
            </li>
            <li>
                <label for="third">Q:What types of cases can I find on the e-portal?
                    <span>&#x3e;</span></label>
                <input type="radio" name="a" id="third">
                <div class="content">A:The e-portal covers a wide range of case types, including civil, criminal, and other legal matters. 
                    You can explore cases related to your specific area of interest or involvement.</div>
            </li>
            <li>
                <label for="fourth">Q:How can I check the status of my case?
                    <span>&#x3e;</span></label>
                <input type="radio" name="a" id="fourth" >
                <div class="content">
                    A:To check the status of your case, select your state, and then search using case numbers, FIR numbers, party names, advocate names, filing numbers, or case types. The e-portal provides comprehensive case status updates.</div>
            </li>
            <li>
                <label for="five">Q: Is my data secure on the e-portal?
                    <span>&#x3e;</span></label>
                <input type="radio" name="a" id="five" >
                <div class="content">
                    A: Yes, your data is secure. We employ advanced security measures, including graphical password authentication, to safeguard your information. Importantly, it's crucial to note that only authorized users, namely Judges, Advocates, and Staff, can access complete case or client details. The e-portal's design ensures that sensitive information remains confidential and protected. Public users have limited access and can only check case status and seek clarifications about the legal process, ensuring the privacy and security of your data. Your trust and data security are our top priorities.</div>
            </li>
            <li>
                <label for="six">Q: Can I communicate with my lawyer through the e-portal?
                    <span>&#x3e;</span></label>
                <input type="radio" name="a" id="six" >
                <div class="content">A: No, the e-portal is primarily designed for case-related functions, such as checking case status and accessing information about legal proceedings. While you can interact with the e-portal to track your case's progress, it does not provide direct communication features with your lawyer. If you need to contact your lawyer, please do so through traditional means, such as phone or email, as the e-portal focuses on case management and legal information access.</div>
            </li>
            <li>
                <label for="twelwth">Q:How do I contact support if I encounter technical issues?
                    <span>&#x3e;</span></label>
                <input type="radio" name="a" id="twelwth" >
                <div class="content">A:If you encounter technical issues, please reach out to our support team through the contact information provided on the e-portal. They will assist you in resolving any problems you may face.</div>
            </li>
            <li>
                <label for="seven">Q:Can I settle my case before going to trial?
                    <span>&#x3e;</span></label>
                <input type="radio" name="a" id="seven" >
                <div class="content">A:Yes, settlements can occur before a trial begins. Parties can negotiate and come to an agreement, potentially avoiding the need for a formal trial..</div>
            </li>
            <li>
                <label for="eight">Q:What happens during a pre-trial meeting?
                    <span>&#x3e;</span></label>
                <input type="radio" name="a" id="eight" >
                <div class="content">A:Pre-trial meetings involve case discussions, negotiations, and preparations. Parties may attempt to reach a settlement or address procedural matters before the trial.</div>
            </li>
            <li>
                <label for="nine">Q:What is the difference between pre-trial and trial hearings?
                    <span>&#x3e;</span></label>
                <input type="radio" name="a" id="nine" >
                <div class="content">
                    A:Pre-trial hearings are preliminary proceedings that occur before a trial. They involve case preparation, negotiations, and scheduling. Trial hearings, on the other hand, involve the presentation of evidence and legal arguments in court.</div>
            </li>
            <li>
                <label for="ten">Q: What should I do if I forget my graphical password?
                    <span>&#x3e;</span></label>
                <input type="radio" name="a" id="ten" >
                <div class="content">
                    A: If you are a Judge, Advocate, or Staff member, and you forget your graphical password, you can initiate the password recovery process. Please note that user accounts, including password management, are under the control of the admin. To reset your password securely, follow the instructions provided by the admin. Admins have the necessary tools to assist users in regaining access to their accounts. This ensures a smooth and secure password reset process for authorized users.</div>
            </li>
            <li>
                <label for="eleven">Q:How long does a typical case management hearing last?
                    <span>&#x3e;</span></label>
                <input type="radio" name="a" id="eleven" >
                <div class="content">
                    A:The duration of a case management hearing can vary widely depending on the complexity of the case and the issues being addressed. Some hearings may be relatively short, while others may take longer to resolve. It is advisable to consult with your legal representative for a more accurate estimate.</div>
            </li>
        </ul>
    </div>
</body>
</html>