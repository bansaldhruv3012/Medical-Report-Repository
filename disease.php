<?php

session_start();

if($_SESSION["email"]==true)
{

}
else
{
    header("Location: login.html");
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Report Repository</title>
<link rel="shortcut icon" type="image/png" href="Images/logo1.jfif">
<style>
body
{
font-family: Arial, Helvetica, sans-serif;
margin:0;
}
.topnav {
  overflow: hidden;
  background-color: white;
}

.topnav .asd {
  float: center;
  display: inline-block;
  color: black;
  text-align: center;
  padding: 14px 8px;
  text-decoration: none;
  font-size: 18px;
bottom:0;
line-height:2;
}
.asd:hover {
  color: blue;
border-width:0 0 2px;
border-style:solid;
margin-bottom:0;
}


.head
{

background-image: linear-gradient(skyblue,blue);
margin-top:0;
height:auto;
display:inline-block;
width:100%;
}

.content{

margin-right:20%;
margin-left:20%;
}
.az ul{padding:0;
display:inline-block;
}
.az ul li{padding:0;
margin:6px;
}
.az li {
display: inline-block;
    padding: 100px;
    color: blue;
    font-size: 25px;
    font-weight: 500px;
    line-height: 60px;
    border-radius: 3px;
    width: 60px;
    height: 60px;
    text-align: center;
    background: #f5f5f5;
}
.az li a{text-decoration:none;}

ul{list-style-type:none;
padding-left:10%;
}
ul li{padding:0;
margin:6px;}
li{
    padding: 100px;
    color: #6896DA;
    font-size: 25px;
    font-weight: 500px;
    line-height: 60px;
    border-radius: 3px;
    width: auto;
    height: auto;
    text-align: center;
    background: #f5f5f5;}
.footer
{
position:relative;
width:100%;
height:100px;
background-color:tomato;
text-align:center;
margin-bottom: 0;
bottom:0;
left:0;
}

</style>

<div class="head">
<p style="font-size:60px; text-align:center; margin-top:1%0; color:white;">DISEASES</p>
</div>

<div class="content">
<div class="az">
<ul type="none">
<li><a href="#A">A</a></li>
<li><a href="#B">B</a></li>
<li><a href="#C">C</a></li>
<li><a href="#D">D</a></li>
<li><a href="#E">E</a></li>
<li><a href="#F">F</a></li>
<li><a href="#G">G</a></li>
<li><a href="#H">H</a></li>
<li><a href="#I">I</a></li>
<li><a href="#J">J</a></li>
<li><a href="#K">K</a></li>
<li><a href="#L">L</a></li>
<li><a href="#M">M</a></li>
<li><a href="#N">N</a></li>
<li><a href="#O">O</a></li>
<li><a href="#P">P</a></li>
<li><a href="#Q">Q</a></li>
<li><a href="#R">R</a></li>
<li><a href="#S">S</a></li>
<li><a href="#T">T</a></li>
<li><a href="#U">U</a></li>
<li><a href="#V">V</a></li>
<li><a href="#W">W</a></li>
<li><a href="#X">X</a></li>
<li><a href="#Y">Y</a></li>
<li><a href="#Z">z</a></li>
</ul>
</div>
<br><br>
<div id="A"></div>
<h1>A</h1>
<ul>
<a href="https://www.medicalnewstoday.com/articles/318286.php" style="text-decoration: none;"><li>Abdominal Pain</li></a>
<li>Anaplasmosis</li>
<li>Anthrax</li>
<li>Arthiritis</li>
<a href="https://en.wikipedia.org/wiki/Asthma" style="text-decoration: none;"><li>Aasthma</li></a>
</ul>
<br><br>
<div id="B"></div>
<h1>B</h1>
<ul>
<li>Bird Flu</li>
<li>Black Lung</li>
<li>Blood Clot</li>
<li>Bronchitis</li>
<li>B Virus Infection</li>
</ul>
<br><br>
<div id="C"></div>
<h1>C</h1>
<ul>
<li>Cancer</li>
<li>Canine FLu</li>
<li>Cervical</li>
<li>Chickenpox</li>
<li>Common Cold</li>
</ul>
<br><br>
<div id="D"></div>
<h1>D</h1>
<ul>
<li>Dengue</li>
<li>Diabetes</li>
<li>Diphtheria</li>
<li>Dog Bite</li>
<li>Down Syndrome</li>
</ul>
<br><br>
<div id="E"></div>
<h1>E</h1>
<ul>
<li>E.coli Infection</li>
<li>Ear Infection</li>
<li>Ebola Virus Disease</li>
<li>Epilepsy</li>
<li>Esophageal candidiasis</li>
</ul>
<br><br>
<div id="F"></div>
<h1>F</h1>
<ul>
<li>Flu</li>
<li>Food Poisoning</li>
<li>Fungal Eye Infection</li>
<li>Fungal pneumonia</li>
<li>FXS (Fragile X Syndrome)</li>
</ul>
<br><br>
<div id="G"></div>
<h1>G</h1>
<ul>
<li>Gonorrhea-X</li>
<li>Gout</li>
<li>Granuloma inguinale</li>
<li>Giardiasis (Giardia)</li>
<li>Gynecologic Cancer</li>
</ul>
<br><br>
<div id="H"></div>
<h1>H</h1>
<ul>
<li>Haemophilus Influenza disease, Type B (Hib or H-flu)</li>
<li>Hepatitis A</li>
<li>Hepatitis B</li>
<li>Herpes</li>
<li>Histoplasmosis infection (Histoplasmosis)</li>
</ul>
<br><br>
<div id="I"></div>
<h1>I</h1>
<ul>
<li>influenza</li>
<li>Intestinal Amebae Infection</li>
<li>Invasive Candidiasis</li>
<li>Inflamation</li>
<li>Iritis</li>
</ul>
<br><br>
<div id="J"></div>
<h1>J</h1>
<ul>
<li>Jackson�Weiss syndrome</li>
<li>Jankovic�Rivera syndrome</li>
<li>Jaundice</li>
<li>Japanese encephalitis</li>
<li>Jeune syndrome</li>
</ul>
<br><br>
<div id="K"></div>
<h1>K</h1>
<ul>
<li>Kabuki syndrome</li>
<li>Kaufman oculocerebrofacial syndrome</li>
<li>Keloids</li>
<li>Kennedy disease</li>
<li>Kohler disease</li>
</ul>
<br><br>
<div id="L"></div>
<h1>L</h1>
<ul>
<li>Laparoschisis</li>
<li>Larsen syndrome</li>
<li>Larynx atresia</li>
<li>Lassa fever</li>
<li>Leukemia</li>
</ul>
<br><br>
<div id="M"></div>
<h1>M</h1>
<ul>
<li></li>
<li>Malaria</li>
<li>Measles</li>
<li>Mumps</li>
<li>Muscular Dystrophy (MD)</li>
</ul>
<br><br>
<div id="N"></div>
<h1>N</h1>
<ul>
<li>Newborn Jaundice [Kernicterus]</li>
<li>Non-Polio Enterovirus Infections</li>
<li>Nonpathogenic (Harmless) Intestinal Protozoa</li>
<li>Norovirus Infection</li>
<li>NTD (Neglected Tropical Diseases)</li>
</ul>
<br><br>
<div id="0"></div>
<h1>O</h1>
<ul>
<li>Obesity and Overweight</li>
<li>Oral Cancer</li>
<li>Osteoarthritis (OA)</li>
<li>Outbreaks</li>
<li>Ovarian Cancer</li>
</ul>
<br><br>
<div id="P"></div>
<h1>P</h1>
<ul>
<li>Pandemic Flu</li>
<li>Parasitic Diseases</li>
<li>Pink Eye [Conjunctivitis]</li>
<li>Plague [Yersinia pestis Infection]</li>
<li>Pneumonia</li>
</ul>
<br><br>
<div id="Q"></div>
<h1>Q</h1>
<ul>
<li>Q Fever [Coxiella burnetii Infection]</li>
<li>Quadrantanopia</li>
<li>Quadriparesis</li>
<li>Queensland tick typhus</li>
<li>Quinism</li>
</ul>
<br><br>
<div id="R"></div>
<h1>R</h1>
<ul>
<li>Rabies</li>
<li>Radiation leukemia</li>
<li>Renal failure</li>
<li>Renal rickets</li>
<li>Respiratory acidosis</li>
</ul>
<br><br>
<div id="S"></div>
<h1>S</h1>
<ul>
<li>Seasonal Flu</li>
<li>Septic shock </li>
<li>Sinus Infection [Sinusitus]</li>
<li>Skin Cancer</li>
<li>Sleep and Sleep Disorders</li>
</ul>
<br><br>
<div id="T"></div>
<h1>T</h1>
<ul>
<li>Tapeworm Infection</li>
<li>TB (Tuberculosis)</li>
<li>TS (Tourette Syndrome)</li>
<li>Tularemia</li>
<li>Typhus Fevers</li>
</ul>
<br><br>
<div id="U"></div>
<h1>U</h1>
<ul>
<li>Ulcerative colitis</li>
<li>Umbilical cord ulceration intestinal atresia</li>
<li>Uncombable hair syndrome</li>
<li>Unverricht�Lundborg disease</li>
<li>Upton�Young syndrome</li>
</ul>
<br><br>
<div id="V"></div>
<h1>V</h1>
<ul>
<li>Valinemia</li>
<li>Variegate porphyria</li>
<li>Vertical talus</li>
<li>Viral hemorrhagic fever</li>
<li>Vitamin E deficiency</li>
</ul>
<br><br>
<div id="W"></div>
<h1>W</h1>
<ul>
<li>Wagner's disease</li>
<li>Waldmann disease</li>
<li>Warkany syndrome</li>
<li>Williams syndrome</li>
<li>Wolman disease</li>
</ul>
<br><br>
<div id="X"></div>
<h1>X</h1>
<ul>
<li>Xanthic urolithiasis</li>
<li>Xeroderma</li>
<li>Xerostomia</li>
<li>XX male syndrome</li>
<li>XY Female syndrome</li>
</ul>
<br><br>
<div id="Y"></div>
<h1>Y</h1>
<ul>
<li>Y chromosome deletions</li>
<li>Yeast infection</li>
<li>Yellow fever</li>
<li>Yellow nail syndrome</li>
<li>Young�Madders syndrome</li>
</ul>
<br><br>
<div id="Z"></div>
<h1>Z</h1>
<ul>
<li>Zellweger syndrome</li>
<li>Zieve's syndrome</li>
<li>Zinc deficiency</li>
<li>Zinc toxicity</li>
<li>Zuska's disease</li>
</ul>
<br><br>
</div>

<div class="footer">
<h1>FOOTER</h1>
</div>
</body>
</html>
