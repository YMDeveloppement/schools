
<?php
include_once  dirname(dirname( dirname( __FILE__ ))) ."\layouts\headerFile.php"    ;
?>
    
<div class="container_ficheEleve">
    <div class="card_ficheEleve">

        <div class="dataEleve">
            <div class="profil">
                <div class="profil_img">
                    <div class="imageEleve"><img src="/schools/img/eleves/nour_mesbahi.png" alt="profil"></div>
                    <div class="profil_inf">
                        <div class="name ttl_card">Yassine MESBAHI</div>
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
            <div class ="ttl_card" >Informations :</div>
            <div class="telParent">
                <div><i class="fa-solid fa-phone" style="color: #bababa;"></i> 0669857412</div>
                <!-- <div><i class="fa-solid fa-phone" style="color: #bababa;"></i> 0663016490</div>
                <div><i class="fa-solid fa-phone" style="color: #bababa;"></i> 0694383802</div> -->
            </div>      
            <div class="emailParent"><i class="fa-solid fa-envelope" style="color: #bababa;"></i><span>Yassine.mesbahi@gmail.com</span></div>
            <div class="annive"><i class="fa-solid fa-cake-candles" style="color: #bababa;"></i><span>2020/8/9</span></div>
            <div class="location"><i class="fa-solid fa-location-dot" style="color: #bababa;"></i><span>Yassine.mesbahi@gmail.com</span></div>
            <div class="codeFamille"><i class="fa-solid fa-id-card"  style="color: #bababa;"></i><span>#25879032#</span></div>
        </div>
        <!-- <div class ="ttl_card" >Sœurs & Frères :</div> -->
        <div class="list_tuteurs">
            <div class="tuteur">
                <div class="recu-prof">
                    <img src="/schools/img/profil.png" alt="profil">
                </div>
                <div>
                    <div style="color:blue;font-weight:900;font-size:.8vw">Yassine MESBAHI - frere </div>
                    <div>CP CP1</div>
                </div>
            </div>
            <div class="tuteur">
                <div class="recu-prof">
                    <img src="/schools/img/profil.png" alt="profil">
                </div>
                <div>
                    <div>status</div>
                    <div>Nom Complet</div>
                   
                </div>
            </div>
            <div class="tuteur" >
                <div class="recu-prof">
                    <img src="/schools/img/profil.png" alt="profil">
                </div>
                <div>
                    <div>status</div>
                    <div>Nom Complet</div>
                </div>
            </div>
        </div>
    </div>
    <div class="tuteurs">
        <div class="addTuteur">
            <div class="title  flx ">
                <div>Personnes autorisées à récupérer :</div>
                <div class="iconAddSmall">
                    <button><i class="fa-solid fa-plus" style="color: #3838ff;"></i></button>
                </div>
            </div>
            <div class="box_recup">
                <!-- <div class="box_addnew">
                    <div class="iconAdd">
                        <button><i class="fa-solid fa-plus" style="color: #3838ff;"></i></button>
                    </div>
                </div> -->
                <div class="box_autorecup">
                    <div class="item_autorecup" style="width: 80% !important">

                        <div class="recu-prof">
                            <img src="/schools/img/profil.png" alt="profil">
                        </div>
                        <div class="tel_recup">
                            <i class="fa-solid fa-square-phone" style="color: #25d366;margin-right:5px"></i><span>0614253678</span>
                        </div>
                        
                    </div>
                    <div class="item_autorecup">

                        <div class="recu-prof">
                            <img src="/schools/img/profil.png" alt="profil">
                        </div>
                        <div class="tel_recup">
                            <i class="fa-solid fa-square-phone" style="color: #25d366;margin-right:5px"></i><span>0614253678</span>
                        </div>
                        
                    </div>
                    <div class="item_autorecup">

                        <div class="recu-prof">
                            <img src="/schools/img/profil.png" alt="profil">
                        </div>
                        <div class="tel_recup">
                            <i class="fa-solid fa-square-phone" style="color: #25d366;margin-right:5px"></i><span>0614253678</span>
                        </div>
                        
                    </div>
                    <div class="item_autorecup">

                        <div class="recu-prof">
                            <img src="/schools/img/profil.png" alt="profil">
                        </div>
                        <div class="tel_recup">
                            <i class="fa-solid fa-square-phone" style="color: #25d366;margin-right:5px"></i><span>0614253678</span>
                        </div>
                        
                    </div>
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
                        <div class="button-box">
                            <div class="add-add">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                            <div class="folder-icon">
                                <i class="fa-regular fa-folder-open"></i>
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
        <div class="boxAbc">
            <!--  -->

        </div>        
        <div class="boxPay"></div>        
        <div class="boxSuivi"></div>        
        <div class="boxDispl"></div>        
        <div class="boxNote"></div>        
        <div class="boxInsc"></div>        
        <div class="boxActv"></div>        
    
    </div>
    
    <!-- <div class="separateur"></div> -->
    
</div>
<!-- popup -->

<!-- <div class="popup_permi">
    <div class="boxPermi">
        <div class="close"><i class="fa-solid fa-circle-xmark" style="color:red"></i></div>
        <div class="permiheader">
            <div>Ajouter une Autorisation</div>
        </div>
        <div class="listPermi">
            <label for="" class="text-secondary fs-6">Type : </label>
            <select class="form-select mt-2 " aria-label="Default select example">
                <option selected>Selectionner une autorisation</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <label for="" class="text-secondary mt-4 fs-6">Déscription :</label>
            <div class="form-floating mt-2">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2" style="font-size:15px">Remarque</label>
            </div>
            <label for="" class="text-secondary mt-4 fs-6">Status :</label>
            <div class="form-check mt-2" style="margin-left:10px">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Activer
                </label>
            </div>
            <div class="form-check" style="margin-left:10px"> 
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Désactiver
                </label>
            </div>
            
        </div>
        <div class="btnsave mb-5 mt-5">
            <button type="button" class="btn btn-primary">Enregistrer</button>
        </div>
    </div>
</div> -->

<?php
    
    if($_FILES['my_file']['name']!=""){
        // echo 'yes';
        $error=[];  
        $fileExtensionsAllowed = ['png']; 
        $fileName = $_FILES['the_file']['name'];
        $fileSize = $_FILES['the_file']['size'];
        $fileTmpName  = $_FILES['the_file']['tmp_name'];
        $fileType = $_FILES['the_file']['type'];
        echo'<pre>';
            print_r([$fileExtensionsAllowed,$fileName,$fileSize,$fileTmpName,$fileType]);
        echo'<pre>';
        // $fileExtension = strtolower(end(explode('.',$fileName)));

        // if (! in_array($fileExtension,$fileExtensionsAllowed)) {
        //     $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
        // }
    }
?>


<div class="popup_permi">
    <div class="boxPermi">
        <div class="close"><i class="fa-solid fa-circle-xmark" style="color:red"></i></div>
        <div class="permiheader">
            <div>Ajouter un Document</div>
        </div>
        <div class="listPermi">
            <label for="" class="text-secondary fs-6">Type : </label>
            <select class="form-select mt-2 " aria-label="Default select example">
                <option selected>Selectionner une type de document</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <label for="" class="text-secondary mt-4 fs-6">Déscription :</label>
            <div class="form-floating mt-2">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2" style="font-size:15px">Remarque</label>
            </div>
            <label for="" class="text-secondary mt-4 fs-6">Fichier :</label>
            <div class="loadFile">
                <input type="file" name="" id="">
            </div>
            
        </div>
        <form action="" method="post">
            <div class="btnsave mb-5 mt-3">
                <button type="submit" class="btn btn-primary" name="uploadFile">Enregistrer</button>
            </div>
        </form>
    </div>
</div>



    
<?php
include_once  dirname(dirname( dirname( __FILE__ ))) ."/layouts/footerFile.php"    ;
?>


