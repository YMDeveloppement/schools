
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
            <div><a href="#"><img src="/schools/img/svg/doc.svg" alt="Doc"></a> <span>Absences et retards</span> </div>
            <div><a href="#"><img src="/schools/img/svg/face.svg" alt="Doc"></a> <span>Autorisations & documents </span> </div>
            <div><a href="#"><img src="/schools/img/svg/absence.svg" alt="Doc" style="--color_fill: #1479bd;"></a> <span>Payment</span> </div>
            <div><a href="#"><img src="/schools/img/svg/doc.svg" alt="Doc"></a> <span>Suivi individuel</span> </div>
            <div><a href="#"><img src="/schools/img/svg/doc.svg" alt="Doc"></a> <span>Discipline</span> </div>
            <div><a href="#"><img src="/schools/img/svg/doc.svg" alt="Doc"></a> <span>Examens & Notes</span> </div>
            <div><a href="#"><img src="/schools/img/svg/doc.svg" alt="Doc"></a> <span>Inscriptions</span> </div>
            <div><a href="#"><img src="/schools/img/svg/doc.svg" alt="Doc"></a> <span>Activités Parascolaires</span> </div>            
    </div>
    
    <div class="separateur"></div>
    
</div>

    
<?php
include_once  dirname(dirname( dirname( __FILE__ ))) ."/layouts/footerFile.php"    ;
?>


