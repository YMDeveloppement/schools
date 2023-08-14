
<?php
include_once  dirname(dirname( dirname( __FILE__ ))) ."\layouts\headerFile.php"    ;
?>
    
<div class="container_ficheEleve">
    <div class="card_ficheEleve">

        <div>
            <div class="profil">
                <div class="profil_img">
                    <div class="imageEleve"><img src="/schools/img/eleves/nour_mesbahi.png" alt="profil"></div>
                    <div class="profil_inf">
                        <div class="name"></div>
                        <div class="status">depart</div>
                        <div class="class_promo">Class : --</div>
                        <div class="massar">Massar : --</div>
                        <div class="matricule">Matricule : --</div>
                        <div class="group">Groupe : --</div>
                    </div>
                </div>
                <div class="relation">
                    <i></i>
                </div>
            </div>
        </div>
        <div class="info_parent">
            <div class="telParent">
                <div>0669857412</div>
                <div>0663016490</div>
                <div>0694383802</div>
            </div>
            <div class="emailParent">Yassine.mesbahi@gmail.com</div>
            <div class="codeFamille">#25879032#</div>
        </div>
        <div class="list_tuteurs">
            <div class="tuteur">
                <i></i>
                <div>
                    <div>status</div>
                    <div>Nom Complet</div>
                    <div>Tél</div>
                    <div>Email</div>
                </div>
            </div>
        </div>
        <div></div>
    </div>
    <div class="tuteurs">
        <div class="addTuteur">
            <div class="title">Personnes autorisées à récupérer :</div>
            <div class="box_addnew">
                <div class="iconAdd">
                    <button><i class="fa-solid fa-plus" style="color: #3838ff;"></i></button>
                </div>
            </div>
        </div>
        <div class="listTuteur">
            <div class="title">Parents & tuteurs :</div>
            <!-- <?php foreach ($data['tuteurs'] as $key => $value) {} ?> -->
            <div class="tuteur">
                <div class="img_tuteur">
                    <img src="" alt="">
                </div>  
                <div class="titeurInfo">
                    <div class="nameTuteur"></div>
                    <div class="telTuteur">
                        Tel :
                    </div>
                    <div class="checkApp">
                        <div class="statusApp"></div>
                        <div class="country"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container_eleveSlick">
    <div class="slideTesting">
            <div class="box active_box"><a class="active_box"><img src="/schools/img/svg/doc.svg" alt="Doc"></a> <span>Absences et retards</span> </div>
            <div class="box"><a  ><img src="/schools/img/svg/face.svg" alt="Doc"></a> <span>Autorisations & documents </span> </div>
            <div class="box"><a ><img src="/schools/img/svg/absence.svg" alt="Doc" style="--color_fill: #1479bd;"></a> <span>Payment</span> </div>
            <div class="box"><a ><img src="/schools/img/svg/doc.svg" alt="Doc"></a> <span>Suivi individuel</span> </div>
            <div class="box"><a ><img src="/schools/img/svg/doc.svg" alt="Doc"></a> <span>Discipline</span> </div>
            <div class="box"><a ><img src="/schools/img/svg/doc.svg" alt="Doc"></a> <span>Examens & Notes</span> </div>
            <div class="box"><a ><img src="/schools/img/svg/doc.svg" alt="Doc"></a> <span>Inscriptions</span> </div>
            <div class="box"><a ><img src="/schools/img/svg/doc.svg" alt="Doc"></a> <span>Activités Parascolaires</span> </div>            
    </div>
    <div class="contentBox">
        <div class="boxDoc">
            <div class="filesBox">
                <div class="title">
                    Dossiers de l’élève :
                </div>
                <div class="subtitle">
                (Documents administratifs, copies ..)
                </div>
                <div class="doc">
                    <div class="check_icon">
                        <div class="checked">
                            <i class="fa-solid fa-check" style="color: #31c76a;"></i>
                        </div>
                    </div>
                    <div class="data">
                        <div class="typeDoc">
                            <div>Photo d'identité</div>
                        </div>
                        <div class="comment">
                            Photo pour le profil d'éléve pour bien identifier
                        </div>  
                        <div class="date">
                        <i class="fa-solid fa-calendar-day" style="margin-right:5px"></i>  12 Oct 2012 Par Yassine MESBAHI
                        </div>
                    </div>
                </div>
                <div class="doc">
                    <div class="check_icon">
                        <div class="checked">
                            <i class="fa-solid fa-check" style="color: #31c76a;"></i>
                        </div>
                    </div>
                    <div class="data">
                        <div class="typeDoc">
                            <div>Certificat de naissance</div>
                        </div>
                        <div class="comment">
                            
                        </div>
                        <div class="date">
                            
                        </div>
                    </div>
                </div>
                <div class="doc">
                    <div class="check_icon">
                        <div class="checked">
                            <i class="fa-solid fa-check" style="color: #31c76a;"></i>
                        </div>
                    </div>
                    <div class="data">
                        <div class="typeDoc">
                            <div>Certificat de naissance</div>
                        </div>
                        <div class="comment">
                            
                        </div>
                        <div class="date">
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="sep"></div> -->
            <div class="autorisationBox">
                <div class="title">
                    Autorisations :
                </div>
            </div>
        </div>       
        <div class="boxAbc"></div>        
        <div class="boxPay"></div>        
        <div class="boxSuivi"></div>        
        <div class="boxDispl"></div>        
        <div class="boxNote"></div>        
        <div class="boxInsc"></div>        
        <div class="boxActv"></div>        
    
    </div>
    
    <!-- <div class="separateur"></div> -->
    
</div>


    
<?php
include_once  dirname(dirname( dirname( __FILE__ ))) ."/layouts/footerFile.php"    ;
?>


