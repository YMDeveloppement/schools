
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
                <div class="dossier">
                    
                    <div>
                        <div class="title">
                            Dossiers de l’élève :
                        </div>
                        <div class="subtitle">
                        (Documents administratifs, copies ..)
                        </div>
                    </div>
                    <div>
                        <div>
                            <div class="folder-icon">
                                <i class="fa-regular fa-folder-open"></i>
                            </div>
                            <div class="folder-add">
                                <i class="fa-solid fa-plus"></i>
                            </div>
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
            </div>
            <!-- <div class="sep"></div> -->
            <div class="autorisationBox">
                <div class="title">
                    Autorisations :
                </div>
                <div class="listOfData">
                    <div class="itemAutoriz">
                        <div class="icon_autoriz"><i class="fa-solid fa-person-walking-arrow-right"></i></div>
                        <div class="titleAuto">Autorization quitter tous seul </div>
                        <div class="check">
                            <label class="switch">
                                <input checked="" type="checkbox">
                                <div class="slider">
                                    <div class="circle">
                                        <svg class="cross" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 365.696 365.696" y="0" x="0" height="6" width="6" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path data-original="#000000" fill="currentColor" d="M243.188 182.86 356.32 69.726c12.5-12.5 12.5-32.766 0-45.247L341.238 9.398c-12.504-12.503-32.77-12.503-45.25 0L182.86 122.528 69.727 9.374c-12.5-12.5-32.766-12.5-45.247 0L9.375 24.457c-12.5 12.504-12.5 32.77 0 45.25l113.152 113.152L9.398 295.99c-12.503 12.503-12.503 32.769 0 45.25L24.48 356.32c12.5 12.5 32.766 12.5 45.247 0l113.132-113.132L295.99 356.32c12.503 12.5 32.769 12.5 45.25 0l15.081-15.082c12.5-12.504 12.5-32.77 0-45.25zm0 0"></path>
                                            </g>
                                        </svg>
                                        <svg class="checkmark" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 24 24" y="0" x="0" height="10" width="10" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path class="" data-original="#000000" fill="currentColor" d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="itemAutoriz">
                        <div class="icon_autoriz"><i class="fa-solid fa-image"></i></div>
                        <div class="titleAuto">PRISE EN PHOTO </div>
                        <div class="check">
                            <label class="switch">
                                <input checked="" type="checkbox">
                                <div class="slider">
                                    <div class="circle">
                                        <svg class="cross" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 365.696 365.696" y="0" x="0" height="6" width="6" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path data-original="#000000" fill="currentColor" d="M243.188 182.86 356.32 69.726c12.5-12.5 12.5-32.766 0-45.247L341.238 9.398c-12.504-12.503-32.77-12.503-45.25 0L182.86 122.528 69.727 9.374c-12.5-12.5-32.766-12.5-45.247 0L9.375 24.457c-12.5 12.504-12.5 32.77 0 45.25l113.152 113.152L9.398 295.99c-12.503 12.503-12.503 32.769 0 45.25L24.48 356.32c12.5 12.5 32.766 12.5 45.247 0l113.132-113.132L295.99 356.32c12.503 12.5 32.769 12.5 45.25 0l15.081-15.082c12.5-12.504 12.5-32.77 0-45.25zm0 0"></path>
                                            </g>
                                        </svg>
                                        <svg class="checkmark" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 24 24" y="0" x="0" height="10" width="10" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path class="" data-original="#000000" fill="currentColor" d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
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


