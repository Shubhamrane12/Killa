<?php
$con=mysqli_connect('127.0.0.1','root','','blogbllog');
$s= "select * from question";
$result=mysqli_query($con,$s);
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vishalgad | Killa (UFOM)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../killa/css/content.css">
  
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
  <nav class="navbar">
    <div class="content">
      <div class="logo"><a href="killa.php">Killa</a></div>
      <ul class="menu-list">
        <div class="icon cancel-btn">
          <i class="fas fa-times"></i>
        </div>
        <li><a href="killa.php">Home</a></li>
        <li><a href="#history">History</a></li>
        <li><a href="#HTR">How to Reach</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#NA">Nearby Attractions</a></li>
        <li><a href="#SAC">Shopping & Cusines</a></li>
        <li><a href="#Quiz">Quiz</a></li>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>

  
  <div class="banner">
    <h1>Vishalgad</h1>
</div>

<div class="about">
    <div class="content">
    
        <div class="fort">
            <h2 id="history" class="title2">History of Vishalgad</h2>
    
            <div class="dailouge">
            <h3 class="d1"><b>“लाख मेले तरी चालतील,<br> पण लाखांचा पोशिंदा जगाला पाहिजे,<br> राजे विशालगड गाठा,<br> आणि पोहोचल्यास तोफांचे तीन वार द्या तोपर्यंत या गणीमास घोडखिंडीत अडकौन ठेवतो.”<br></b></h3>
            </div>
    
            <div class="row2">
                <div class="col-3">
                
                <img style="border:6px outset #a1a19f;" src="../killa/image/Vishalgad/v5.png">
                <center><h4>Sardar Baji Prabhu Deshpande</h4></center>
                </div>
            </div>
            
            <div class="row1">
            <div class="col-v1">
                <p><b>
                    Vishalgad fort, is also called ‘Khelna’ or ‘Khilna’ by locals, and was one of the important forts of the Maratha empire.<br> The name ‘Vishalgad’ means grand fort in Marathi, the name was given by Chhatrapati Shivaji Maharaj after annexing it during 1660.<br> The structure covers an area of 1130 m and was built on a hilltop in the Sahyadri mountain ranges at a height of 3500 feet above sea level, and is about 76 km north – west of Kolhapur.
    <br>Vishalgad Fort was built in the year 1058 by a Shilahara ruler ‘Marsinh’ and was initially known as ‘Khilgil’ fort. But down the centuries it passed into the hands of many rulers who ruled around the Deccan region.
     </p>
    <p><b>
        Battle of Pawankhind:
    </b></p>
    <p><b>
        Battle of Pävankhind was a rearguard last stand that took place on 13 July 1660 at a mountain pass in the vicinity of fort Vishalgad, near the city of Kolhapur, Maharashtra, India between the Maratha Sardar Baji Prabhu Deshpande and Siddi Masud (later known as Siddi Jauhar ) of Bijapur Sultanate.<br><br>
        After Defeating Afjhalkhan, In the early 1660 the Maratha King Chhatrapati Shivaji Maharaj was trapped in the fort of Panhala, under siege and vastly outnumbered by an Adilshahi army led by an Abyssinian named Siddi Masud. Maharaj Planned to escape to the fort of Vishalgadh, which was administered by a Maratha chieftain named Range Narayan Orpe. Two Maratha sardars of the Adilshahi Commander Siddi Jouhar namely Suryarao Surve and Jaswantrao Dalvi had also encircled the fort of Vishalgadh simultaneously. Chhatrapati Shivaji Maharaj waited for months, planning and depleting the Adilshah's food source. He waited until he reckoned that they needed to gather more food, and then started his plan.<br><br>
        Chhatrapati Shivaji Maharaj, Veer Baji Prabhu, and around 600 of their best troops, hardened mountaineers of the Maval region, would dash through the Adilshahi force at night. A man named Shiva Kashid, who resembled Shivaji Maharaj’s appearance, had volunteered to dress like the king and get captured. It was envisaged that this would buy some additional time due to the confusion over identity, before Siddi Masud realised the error and gave chase.
        On the Night of 13th July Chhatrapati Shivaji Maharaj made his escape, with his contingent of troops. Veer Baji Prabhu was second in command of this contingent. The Adilshahis gave hot and rapid pursuit, with an army of 10,000. It was clear that there was no way to shake off the enemy, and that the Marathas would not simultaneously prevail over both the Moghul garrison at Vishagadh and the chasing Adilshahi army. The only option was to divide the forces where one of the section will stay back and fight the larger Adilshahi forces in a rearguard action, while the rest of the Marathas would carry on to their destination.<br><br>
        “लाख मेले तरी चालतील, पण लाखांचा पोशिंदा जगाला पाहिजे, राजे विशालगड गाठा, आणि पोहोचल्यास तोफांचे तीन वार द्या तोपर्यंत या गणीमास घोडखिंडीत अडकौन ठेवतो.”<br><br>
        After saying those final words to the king, Veer Bajiprabhu Deshpande occupied Ghod Khind,(a valley present in the Kolhapur region of Maharashtra ) blocking the path of the pursuers, and made a determined defence against them. His brother Fulaji Prabhu as well as sardars such as Shambusing Jadhav and 300 Maratha forces were present with him.<br><br>
    </b></p>
    
    <div class="row2">
        <div class="col-3">
        
        <img style="border:6px outset #a1a19f;" src="../killa/image/Vishalgad/v8.png">
        <center><h4>Danda Patta</h4></center> 
        </div>
        <div class="col-3">
            
            <img style="border:6px outset  #a1a19f;" src="../killa/image/Vishalgad/v7.jpg">
            <center><h4>Maharaj and Sardar at Pavankhind</h4></center>
            </div>
    </div>
    <p><b>Wearing Dandpatta in both the hands the fierce battle started, The Marathas genius in guerilla warfare took the advantages of the forest, valleys and were in the upper hand in the battle but few hours later  Fulaji Prabhu and Shambusing were killed after a gallant and fierce fights. Veer Baji Prabhu was severely wounded but carried on fighting at his station. The Adilshahi army repeatedly tried to break through the defenses of the pass, but were repeatedly repulsed. The unequal battle raged for hours, with the defenders maintaining their positions, but with rapidly depleting numbers. Only a handful of Marathas survived, and around a thousand soldiers of the Adilshahi army became casualties in attempting to take the pass.<br><br>
        On the other hand Chhatrapati Shivaji Maharaj and his 300 soldiers had to break through the encirclement of Suryarao and Jaswantrao at Vishalgadh. A fierce battle ensued in which Maharaj himself fought wearing Dandpatta in his both hands. Seeing this fight, the commander of Vishalgadh fort sent help to Maharaj enabling him and his troops to reach the fort safely. Five to Six hours after the battle, The cannon fire announcing Maharaj’s safe return to Vishalgadh was heard. Almost 300 Marathas had been killed, Legend has it that a gravely injured Veer Baji Prabhu continued engaging the enemy and held the pass, only laying down his life once he heard the sound of cannon fire. The handful surviving Marathas then retreated and disappeared in the forest as per the plan. Shivaji Mahraj’s plan was successful. Having made his way to Vishalgadh, Rango Narayan Orpe had fresh troops at his disposal. Veer Baji Prabhu had successfully fought the rear-guard action and slowed the Adilshahis forces before they arrived at the fort having carried on pursuing Shivaji Maharaj to Vishalgadh. The vengeful fresh Maratha troops carried out a blazing and bloody attack against Siddi Masood, Jasawantaro and Suryarao's forces inflicting heavy losses upon the latter when they arrived at the fort. The Adilshahi forces fled as a result of this attack.<br><br>
        One Maratha chronicler describes this fierce attack by mentioning that the 'green valleys of Vishalgadh were painted in red due to enemy's blood'. Shivaji Maharaj then safely crossed the western ghats and reached his capital Rajgad via Konkan region. Shivaji Maharaj later personally visited the house of the slain Baji Prabhu, which was in the village of Kasabe Sindh in the Raigad district and honoured his family, including giving his eldest son a position of leadership and honour in the forces.The defence of the pass of Ghod Khind by about 300 Marathas led by the Baji Prabhu Deshpande was renamed “The Battle of Pavan Khind” which in Marathi means “The Battle of the Sacred Pass”.<br><br>
        Another history is about in 1844 it was one of the forts of Kolhapur State that initiated a rebellion against a Brahmin regent called Daji Krishna Pandit who had been installed by the British to govern the state in 1843 at a time when the natural heir to the throne was underage. He took direction from a political agent of the East India Company and among their actions were reforms to the tax of land. These reforms caused much resentment and, despite Kolhapur having refrained from involvement in the previous Anglo-Maratha Wars, a revolt against the British began in 1844. The rebellion began with soldiers locking themselves into hill-forts such as those as Panhala and Vishalgad, and then spread to Kolhapur itself.
    </b></p>
    </div>
    </div>
    </div>
    <hr>
    
    <!-------- HTR -------->
    
    <div class="fort">
    <h2 id="HTR" class="title2">How to Reach</h2>
    <div class="row1">
    <div class="col-v1">
                 
    <p><b>By Car:</b></p>
            <div class="row2">
                <div class="col-3">
                
                <img style="border:6px outset #a1a19f;" src="../killa/image/Vishalgad/v34.png">
                <center><h4>Amba Ghat by Car</h4></center>
         </div>
            </div>
    <p><b>Located at around 80km from Kolhapur, Vishalgad fort could be reached within two hours of drive from the city. One has to drive on Kolhapur-Ratnagiri State Highway till Amba and then taking a left turn and head further for around 20km crossing the forest, roads and ghat section, One can park their vehicle there. Then one has to cross a bridge joining two mountains and then climb for around 20mins to reach the top of the fort.</b></p><hr>
            
    <p><b>By Train:</b></p>
    <div class="row2">
    <div class="col-3">
    
    <img style="border:6px outset #a1a19f;" src="../killa/image/Vishalgad/v23.png">
    <center><h4>Nearest Railway Station</h4></center>
     </div>
    </div>
    <p><b>By train you can reach Chhatrapati Shahu Maharaj Terminus (officially Shri Chhatrapati Shahu Maharaj Terminus) (station code: CSMT KOP) is the main railway terminus in the city of Kolhapur, India. And then you can take local bus or cars to reach Vishalgad.</b></p><hr>
    
    <p><b>By Air:</b></p>
    <div class="row2">
                <div class="col-3">
                    
                    <img style="border:6px outset  #a1a19f;" src="../killa/image/Vishalgad/v22.png">
                    <center><h4>Nearest Airport</h4></center>
                    </div>
            </div>
    <p><b>Kolhapur Airport is located 9 km from the city of Kolhapur in Maharashtra, from their reach Kolhapur city and take local bus or car to reach Vishalgad.</b></p>
            </div>
         </div>
        </div>
        <hr>
    
    
        <!-------- Gallery -------->
    
    <div class="fort">
        <h2 id="gallery" class="title2">Gallery</h2>
        <div class="row1">
        <div class="col-v1">
     <p><b>What to see on fort ?</b></p>
    <p><b>A Famous Dargah of Hazrat Sayed Malik Rehan Meera Saheb, which is visited by tourist is located on this fort.<br>Also the Main Gate (called as Mahadarwaja) was recently built.<br> Also from the fort you can see adjoing view of Fort Panahala and also surrounding Kolhapur Region.<br></b></p>
    
    <p><b>Our Gallery</b></p>
    
    <div class="row2">
    <div class="col-3">
     
    <img style="border:6px outset #a1a19f;" src="../killa/image/Vishalgad/v33.png">
    <center><h4>Mahadarwaja</h4></center> 
    </div>
    
     <div class="col-3">
        
        <img style="border:6px outset #a1a19f;" src="../killa/image/Vishalgad/v3.png">
        <center><h4>Base View of Fort</h4></center>
        </div>
    
    <div class="col-3">
        
        <img style="border:6px outset  #a1a19f;" src="../killa/image/Vishalgad/v2.png">
        <center><h4>Bridge Connecting to Fort</h4></center>
        </div>
    
        <div class="col-3">
            
            <img style="border:6px outset  #a1a19f;" src="../killa/image/Vishalgad/v32.png">
            <center><h4>Newly Built Door</h4></center>
            </div>
         
            <div class="col-3">
                
                <img style="border:6px outset  #a1a19f;" src="../killa/image/Vishalgad/v6.png">
                <center><h4>Dargah</h4></center>
                </div>
                
                <div class="col-3">
                    
                    <img style="border:6px outset  #a1a19f;" src="../killa/image/Vishalgad/v4.png">
                    <center><h4>Old Door(Mahadarwaja)</h4></center>
                    </div> 
                    
                    <div class="col-3">
                         
                        <img style="border:6px outset  #a1a19f;" src="../killa/image/Vishalgad/v31.png">
                        <center><h4>Mahadarwaja</h4></center>
                        </div>  
    
    </div>
    <p><b>Our Measures: </b></p>
    <p><b>Today the fort is in ruins and it needs to be taken care by the archaeological authorities. The fort underwent restoration work recently in which the fortification walls and the entrance arch has been fixed. Visitors and the locals should take care of the fort so that the history and heritage is conserved in a sustainable way </b></p>

    <p><b>Accomodation </b></p>
    <p><b>
        You can stay in Kolhapur as there are many hotels there.
     </b></p>
    </div>
    </div>
    </div>
    <hr>
    
    <!-------- NA -------->
    
    <div class="fort">
    <h2 id="NA" class="title2">Nearby Attractions</h2>
    <div class="row1">
    <div class="col-v1">
     <p><b>
    1) Panhala Fort:</b></p>
    
    <div class="row2">
    <div class="col-3">
    
    <img style="border:6px outset #a1a19f;" src="../killa/image/Vishalgad/v35.png">
    <center><h4>Panhala Fort</h4></center> 
    </div>
    </div>
    <p><b>
    Panhala Fort Built in 1100 A.C.. Historic memories of Chhatrapati Shivaji Maharaj. Hill Station. Carrying a rich heritage, Panhala Fort forms the largest of all the Deccan forts. This fort was built between the 1178-1209 AD, this is the only fort where the great ruler himself, Chatrapati Shivaji Maharaj is believed to have spent more than 500 days. The history of Panhala Fort is one of the oldest, and famous amongst Maratha warriors. Sajja Kothi, where Chhatrapati Sambhaji Maharaj was imprisoned. Ambabai Temple, where Chhatrapati Shivaji Maharaj used to seek blessings before venturing on expeditions. In addition to history, Panhala at an altitude of 977 m offers some inspiring scenery and a soothing climate. An average temperature of 25 *C. It is a must place to visit, while in kolhapur. A 45 minute journey, accompanied by beautiful landscape , a trip to Panhala will surely be a memorable one!
    </b></p><hr>
    
    <p><b>2) Shri Ambabai (mahalaxmi) Temple: </b></p>
    <div class="row2">
       <div class="col-3">
       
       <img style="border:6px outset #a1a19f;" src="../killa/image/Vishalgad/M1V.png">
       <center><h4>Shri Ambabai (mahalaxmi) Temple</h4></center>
       </div>
   </div>
    <p><b>
      The Shri Ambabai (mahalaxmi) Temple of Kolhapur in Maharashtra, India, is one of the most famous temples of Hinduism of the state. Kolhapur and the temple is located on the banks of the Panchganga River, it is about 230 km south of Pune
        </b></p><hr>
  
    
    <p><b>3) Shri Jyotiba temple: </b></p>
     <div class="row2">
        <div class="col-3">
        
        <img style="border:6px outset #a1a19f;" src="../killa/image/Vishalgad/v20.png">
        <center><h4>Shri Jyotiba Devastan</h4></center>
        </div>
    </div>
     <p><b>
    Jyotiba temple Situated at a height of 3100 feet, this holy site nestles in the mountains, also known as Wadi Ratnagiri. Jyotiba is supposed to be an incarnation of three gods -- Brahma, Vishnu and Mahesh and the seer Jamadagni. A colorful fair takes place on the full moon night of the Hindu months of Chaitra and Vaishakh. During the fair, Devotees from various regions hoist "Sasan Kathi", which is the holy symbol of lord Jyotiba. Jyotiba lies 17 km to the north-west of Kolhapur. 
     </b></p><hr>
    
    <p><b>4) Narsobawadi: </b></p>
    <div class="row2">
    <div class="col-3">
      
        <img style="border:6px outset  #a1a19f;" src="../killa/image/Vishalgad/v25.png">
        <center><h4>Narsobawadi</h4></center>
        </div>
    </div>
    <p><b>
    Narsobawadi This holy place is situated on the confluence of the rivers Krishna and Panchaganga. It is well known for the holy padukas (slippers) of Dattaguru ( an incarnation of Brahma, Vishnu and Mahesh). Narasimha Saraswati, considered an incarnation of Dattaguru who lived here for 12 years. Recently, all the devotees have erected a temple called "Jahaz Mandir", which is unique in its own way, because it has been built in the shape of a ship with beautiful landscape. Narsobachiwadi is famour for Basundi, Kundhi Pedas, Kawatchi Barfi's.
  </b></p><hr>


  <p><b>5) Bahubali: </b></p>
  <div class="row2">
  <div class="col-3">
      
      <img style="border:6px outset  #a1a19f;" src="../killa/image/Vishalgad/v12.png">
      <center><h4>Bahubali</h4></center>
      </div>
  </div>
  <p><b>
    Bahubali This site is revered by both Hindus and Jains. Devotees flock here to pay respect to the 28 feet tall marble statue of Bahubali and visit the temples of the 24 tirthankaras or saints. This site is 27 km to the south of Kolhapur.
</b></p><hr>

<p><b>6) Siddhagiri Gramjivan Museum:  </b></p>
    <div class="row2">
    <div class="col-3">
        
        <img style="border:6px outset  #a1a19f;" src="../killa/image/Vishalgad/v27.png">
        <center><h4>Siddhagiri Gramjivan Museum</h4></center>
        </div>
    </div>
    <p><b>
    Siddhagiri Gramjivan Museum A unique project, perhaps the only project in India situated at Shri Kshetra Siddhagiri Math, Kaneri, Tal. Karveer, Dist. Kolhapur. The place is near Kolhapur city on Pune Banglore Highway. Shri Kshetra Siddhagiri Math has a history of more than 1000 years, and is a holy place of worship of Lord Mahadeva. The surrounding around the museum is very calm and quiet, a hilly place with a good collection of Flora and Fauna.  </b></p><hr>

  <p><b>7) Gaganbawda: </b></p>
    <div class="row2">
    <div class="col-3">
        
        <img style="border:6px outset  #a1a19f;" src="../killa/image/Vishalgad/v10.png">
        <center><h4>Gaganbawda</h4></center>
        </div>
    </div>
    <p><b>
      Gaganbawda. A hill station about 2-3 hours from CBS(Central Bus Stand, Kolhapur) and Kolhapur Railway Station. Excellent climate during the rainy season.
  </b></p><hr>

  <p><b>8) Gagangiri Maharaj Math(Temple): </b></p>
    <div class="row2">
    <div class="col-3">
     
        <img style="border:6px outset  #a1a19f;" src="../killa/image/Vishalgad/v19.png">
        <center><h4>Gagangiri Maharaj Math(Temple)</h4></center>
        </div>
    </div>
    <p><b>
    Gagangiri Maharaj Math ( Temple ) at Gaganbawda. Gagangiri Maharaj was a Great Yogi. One of the few living sages having Unique Capacities, Vision and Synthesis. Gagangiri Maharaj Math is renowned as a spiritual destination for domestic and foreign travelers. The Math is located in the midst of dense forests and thick green vegetation at Dajipur nearby Kolhapur. Shri Gagangiri Maharaj was a Hindu Sanyasi (Sage) following the Nath Sampradaya.The life and history of the sage tells that Gagangiri Maharaj spent many years in this Math undergoing penance from 1932 to 1940. The Sage spent all these years in meditation in the deep jungle in this Math. This Ashram offers the Hindu teachings, yoga and meditation practices and also serves as a religious temple for the devotees. It is an attractive place for meditation, yoga and to clearly understand the Indian culture and its religious importance.
  </b></p><hr>


  <p><b>9) Khidrapur: </b></p>
    <div class="row2">
    <div class="col-3">
        
        <img style="border:6px outset  #a1a19f;" src="../killa/image/Vishalgad/v9.png">
        <center><h4>Khidrapur</h4></center>
        </div>
    </div>
    <p><b>
    Khidrapur A famous and beautiful Lord Shiva Temple built 900 years ago. The artistic temple of Kopeshwar or Mahadev at Khidrapur is a treasure-house of beautifully carved sculptures and a rare architectural marvel. The entire temple rests on a gajapeeth which is a semi-circular platform resting on the back of 92 carved elephants.  </b></p><hr>


<p><b>10) Dajipur Bison Sanctuary:  </b></p>
    <div class="row2">
    <div class="col-3">
        
        <img style="border:6px outset  #a1a19f;" src="../killa/image/Vishalgad/v14.png">
        <center><h4>Dajipur Bison Sanctuary</h4></center>
        </div>
    </div>
    <p><b>
      Dajipur Bison Sanctuary The forest area of dajipur is situated on the border of kolhapur and sindhudurg districts. Surrounded by rugged mountains and dense forests, this secluded little place is completely cut off from human habitat. Home to bison, wild deer, gava (bison), and many more spectacular wild animals & birds. An excursion in the vicinity to the Gagangiri maharaj's Math makes for a pleasant outing. There is a scenic resort near the backwaters of Radhanagari dam which is highly recommended for wildlife lovers. Dajipur is an exciting and beautiful holiday getaway, situated 1200 meters above sea level. It is about 80 km away from Kolhapur. Radhanagari to Dajipur distance is 30 km.  </b></p><hr>


      <p><b>11) Ramling: </b></p>
      <div class="row2">
      <div class="col-3">
          
          <img style="border:6px outset  #a1a19f;" src="../killa/image/Vishalgad/v26.png">
          <center><h4>Ramling</h4></center>
          </div>
      </div>
      <p><b>
        The site is home to monolithic temples believed to be where the Pandavas did their 'Tapascharya' in that era. Each of these temples is carved into a single laterite stone which is a major attraction for tourists. 
         </b></p><hr>

    <p><b>12) Radhanagari Dam: </b></p>
    <div class="row2">
    <div class="col-3">
        
        <img style="border:6px outset  #a1a19f;" src="../killa/image/Vishalgad/v13.png">
        <center><h4>Radhanagari Dam</h4></center>
        </div>
    </div>
    <p><b>
    Radhanagari Dam. About 15-20 km from CBS and Railway Station. 
   </b></p><hr>


  <p><b>13) Amboli Ghat and Waterfall: </b></p>
  <div class="row2">
  <div class="col-3">
      
      <img style="border:6px outset  #a1a19f;" src="../killa/image/Vishalgad/v11.png">
      <center><h4>Amboli Ghat and Waterfall</h4></center>
      </div>
  </div>
  <p><b>Amboli Beautiful Rainy hill station, lot of clouds and Beautiful waterfall.</b></p><hr><br>
</div>
</div>
</div>
    
    

  <!-------- SAC -------->
    
  <div class="fort">
    <h2 id="SAC" class="title2">Shopping & Cusines</h2>
    <div class="row1">
    <div class="col-v1">
                 
    <p><b>Shopping:</b></p><br>
 <div class="row2">
                <div class="col-3">
                  <img style="border:6px outset #a1a19f;" src="../killa/image/Vishalgad/v30.png">
                <center><h4>Kolhapuri Chappal</h4></center>
         </div>
         <div class="col-3">
        <img style="border:6px outset #a1a19f;" src="../killa/image/Vishalgad/saaj.png">
          <center><h4>Kolhapuri Saaj</h4></center> 
   </div>
   <div class="col-3">
   <img style="border:6px outset #a1a19f;" src="../killa/image/Vishalgad/v28.png">
    <center><h4>Kolhapuri Saare</h4></center> 
  </div>
</div>
    <p><b>
In Kolhapur the best things to buy is Kolhapuri Saare and Kolhapuri Chappal. Also •	Kolhapuri Saaj. One of the best place to buy Kolhapuri Saaj and other antique jewellery is Karekar Jewellers   </b></p><hr>
            
<p><b>Cusines:</b></p><br>
<div class="row2">

<div class="col-3">
    
    <img style="border:6px outset #a1a19f;" src="../killa/image/Vishalgad/v21.png">
    <center><h4>Bawada Misal</h4></center>
  
     </div>
    

    <div class="col-3">
    <img style="border:6px outset #a1a19f;" src="../killa/image/Vishalgad/v17.png">
      <center><h4>Rajabhau-Bhel</h4></center> 
       </div>
      

      <div class="col-3">
       <img style="border:6px outset #a1a19f;" src="../killa/image/Vishalgad/v16.png">
        <center><h4>Chorage Misal</h4></center>
      </div>
        

      <div class="col-3">
      <img style="border:6px outset #a1a19f;" src="../killa/image/Vishalgad/v18.png">
      <center><h4>Akkha Masur</h4></center>
    </div>

           <div class="col-3">
          <img style="border:6px outset #a1a19f;" src="../killa/image/Vishalgad/v36.png">
            <center><h4>Tambda and Pandhra rassa</h4></center>
          </div>

           <div class="col-3">
            <img style="border:6px outset #a1a19f;" src="../killa/image/Vishalgad/v15.png">
            <center><h4>Fadatare Misal</h4></center>  
             </div>
          </div>
    <p><b>
     1) Bawada Misal:-<br> This used to be very famous misal joint and has been visited by many celebrities, a fact easily seen from the pictures hanging on its wall.<br><br>
     2) Rajabhau-Bhel:-<br> This is a very famous Bheel place- dish made with Rice puffs, tamarind, chillis and onions.<br><br>
     3) Chorage Misal:-<br> Off Mahadwar road. Equally popular place.<br><br>
     4) Akkha Masur:-<br> a famous local mini-meal- red lentil curry in thick tomato-cashew base served with Bharaki (local bread) and chillis. you can find this in Bawda area -popular hawker food.<br><br>
     5) Tambda and Pandhra rassa:-<br> A special Kolhapuri food for Non Veg lovers. If you are in Kolhapur try this dish once. You are going to enjoy.<br><br>
     6) Fadatare Misal:-<br> This is in 'Udyam Nagar' and by far the most popular misal place. It has been featured extensively in print and television media, but owners still prefer to run this place in the backyard of old factory in an industrial area. It has retained its taste for all these years, and hence it is popular among local as well as tourists.<br><br>

     Other good places are Datta Caffe, Ahar Vihar, Khas Bag misal, Kothawale (Laxmi) misal. Here's the list of more Restaurants:<br><br>
•	Hotel Victor Palace<br>
•	Hotel Raysons (24 /7 Coffee shop)<br>
•	Hotel Pearl<br>
•	Hotel Meghdoot<br>
•	Hotel Opel (best for veg and non-veg) <br>
•	Hotel Khavvaiya ( Gujrathi ) <br>
•	[Lava Rocks Inn] ( Cafe, Pan America, Middle Eastern & Asian Cuisine ) (Thursdays Closed!)<br>     
</b></p>
    
    
  </div>
  </div>
  </div>
  <hr>
    
    
  



    </div>
    </div>

<!-----Quiz------>
<h2 id="Quiz" class="title2">Quiz</h2>
<form name="form2" method="post" action="quiz.php">
<div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-interval="false">
  
  <div class="carousel-indicators">
    
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label="Slide 9"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="9" aria-label="Slide 10"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="10" aria-label="Slide 11"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="11" aria-label="Slide 12"></button>
  </div>
  <div class="carousel-inner" style="text-align: center;">
  <div class="carousel-item active ">
      <img src="image/hills.jpg" id="pic" class="d-block w-100" alt="...." style="max-width: 1500px; max-height: 600px; position: relative; left: 15%;">
      <div class="carousel-caption d-none d-md-block" style="top: 15%;
      bottom: auto;">
        <h5 style="display: inline-block; font-size: 50px; font-family: cursive;
	background: #23BF8D;
	color: #fff;
	padding: 10px 50px;
	margin: 30px 0;
	border-radius: 10px;
	transition: background 0.5s;
	align-items: center;">Ready For Quiz</h5>
        
      </div>
    </div>
  <?php
  $i=1;
  while($rows=mysqli_fetch_array($result)){
    
  ?>
    <div class="carousel-item img-fluid">
      <img src="image/hills.jpg" id="pic" class="d-block w-100" alt="...." style="max-width: 1500px; max-height: 600px; position: relative; left: 15%;">
      <div class="carousel-caption d-none d-md-block" style="top: 15%;
      bottom: auto;">
        <h5><?php echo $rows['Question']; ?></h5><br><br>
        <div class="row">
          <div class="col-6">
            <input type="radio" name="<?php echo $rows['name']; ?>" value="<?php echo $rows['opt1']; ?>" class="btn-check" id="<?php echo $rows['opt1']; ?>" autocomplete="off">
            <label class="btn btn-outline-primary" for="<?php echo $rows['opt1']; ?>"><?php echo $rows['opt1']; ?></label><br>
            <input type="radio" name="<?php echo $rows['name']; ?>" value="<?php echo $rows['opt2']; ?>" class="btn-check" id="<?php echo $rows['opt2']; ?>" autocomplete="off"> 
            <label class="btn btn-outline-primary" for="<?php echo $rows['opt2']; ?>"><?php echo $rows['opt2']; ?></label><br>
          </div>
          <div class="col-6">
            <input type="radio" name="<?php echo $rows['name']; ?>" value="<?php echo $rows['opt3']; ?>" class="btn-check" id="<?php echo $rows['opt3']; ?>" autocomplete="off">
            <label class="btn btn-outline-primary" for="<?php echo $rows['opt3']; ?>"><?php echo $rows['opt3']; ?></label><br>
            <input type="radio" name="<?php echo $rows['name']; ?>" value="<?php echo $rows['opt4']; ?>" class="btn-check" id="<?php echo $rows['opt4']; ?>" autocomplete="off">
            <label class="btn btn-outline-primary" for="<?php echo $rows['opt4']; ?>"><?php echo $rows['opt4']; ?></label><br>
            
            <input type="hidden" name="answer<?php echo $i; ?>" id="answer<?php echo $i; ?>" value="<?php echo $rows['answer']; ?>">
          </div><!--
          <button type="submit" onClick=checkans()>Check Answer</button>
          <div id="result"></div>-->
        </div>
      </div>
    </div>
    <?php  $i++;}?>
    
    <div class="carousel-item">
      <img src="image/hills.jpg" id="pic" class="d-block w-100" alt="...." style="max-width: 1500px; max-height: 600px; position: relative; left: 15%;">
      <div class="carousel-caption d-none d-md-block" style="top: 15%;
      bottom: auto;">
        <button type="submit" style="display: inline-block;
	background: #52E124;
	color: #fff;
	padding: 10px 50px;
	margin: 30px 0;
	border-radius: 30px;
	transition: background 0.5s;
	align-items: center;" name="s">Submit</button>
        <?php if($_SESSION["score"]){ ?>
<div id="score">

  <h2 style="color:green; font-size: 50px; width:250px;
	height: 55px;
	position:relative;
	margin:4% auto;
	background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8));
	
	overflow:hidden;"
}><?php echo $_SESSION["score"]; ?>/10</h2>


<?php


if($_SESSION["score"]>=0 && $_SESSION["score"]<=3){
$grade="Try Again!!";
}
if($_SESSION["score"]>3 && $_SESSION["score"]<=5){
$grade="Good";
}
if($_SESSION["score"]>5 && $_SESSION["score"]<=8){
$grade="Very Good";
}
if($_SESSION["score"]>=9){
$grade="Excellent!!";
}

echo "<p style='color:#ff523b; font_family = sans-serif;
font-size: 50px; padding: 10px 50px;
margin: 30px 0;
border-radius: 10px;
transition: background 0.5s;
border = 1px solid;'>".$grade."</p>";
?>

<?php session_unset(); session_destroy(); }?>


      </div>
    </div>
    
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br><br>
</form>

<!-------- footer -------->

<div class="footer">
    <div class="container1">
    <div class="row">
    <div class="footer-col-1">
    <h3>Having Trouble ?</h3>
    <p><b>Click the About-Us Image for more Info!</b></p>
    <div class="app-logo">
        <a href="as.php" target="_blank">
            <img src="../killa/image/about-us.png"></a>
    </div>
    </div>
    <div class="footer-col-2">
        <a href="killa.php"><img src="../killa/image/logo.png"></a>
    <p><b>Our purpose is to share information</b></P>
    </div>
    <div class="footer-col-3">
    <h3>Useful Links</h3>
    <ul>
    <li><a href="https://www.facebook.com/sahyadripratishthaan/" target="_blank"><p><b>Donate</b></p></a></li>
    <li><a href="https://www.treksandtrails.org/blog/category/forts-of-maharashtra/" target="_blank"><p><b>Blog Post</b></p></a></li>
    <li><a href="https://www.maharashtratourism.gov.in/" target="_blank" ><p><b>MTDC</b></p></a></li>
    <li><a href="as.php" target="_blank"><p><b>Need Help</b></p></a></li>
    </ul>
    </div>
    <div class="footer-col-3">
    <h3>Get More Information</h3>
    <ul>
    <li><a href="https://www.facebook.com/GadKilleSafar" target="_blank"> <p><b>Facebook</b></p> </a> </li>
    <li><a href="blog.php" target="_blank"> <p><b> Blogs </b></p> </a> </li>
    <li><a href="https://www.instagram.com/mi_durg_veda/" target="_blank"> <p><b>Instagram</b></p> </a> </li>
    <li><a href="https://www.youtube.com/channel/UC4BFta04-H7yVIa3045chXA" target="_blank"> <p><b> YouTube </b></p> </a> </li>
    </ul>
    </div>
    </div>
    <hr>
    <p class="copyright"><b>Copyright 2020 - Unexplored Forts</b></p>
    </div>
    </div>

    <script>
      $(document).ready(function() {
          $('.carousel').carousel('pause');
      });
    </script>
  <script>
    const body = document.querySelector("body");
    const navbar = document.querySelector(".navbar");
    const menu = document.querySelector(".menu-list");
    const menuBtn = document.querySelector(".menu-btn");
    const cancelBtn = document.querySelector(".cancel-btn");
    menuBtn.onclick = ()=>{
      menu.classList.add("active");
      menuBtn.classList.add("hide");
      cancelBtn.classList.add("show");
      body.classList.add("disabledScroll");
    }
    cancelBtn.onclick = ()=>{
      menu.classList.remove("active");
      menuBtn.classList.remove("hide");
      cancelBtn.classList.remove("show");
      body.classList.remove("disabledScroll");
    }

    window.onscroll = ()=>{
      this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
    }
  </script>

</body>
</html>
