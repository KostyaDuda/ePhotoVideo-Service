<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>ВАКАНСІЇ</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
         <div class="fitr">
            <div class="footer-newsletter">
                <div class="newsletter-form">
                     <label>Місто</label>
                     <select >
                        <option value="Ужгород">Ужгород</option>
                        <option value="Хмельницька">Хмельницька</option>
                        <option value="Київ">Київ</option>
                        <option value="Харків">Харків</option>
                        <option value="Дніпро">Дніпро</option>
                    </select>
                    <input type="submit" value="Шукати">
                </div>
            </div>
        </div>
    </div>

    <div class="single-product-area">
      
            <div class="container">
            <?php foreach($vacancies as $vacancy):?>
                <div class="row">
                    <div class=" col-lg-12 col-md-12 col-sm-12">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <div class="name_in_raiting">
                                    <h2><a  href="#"><?= $vacancy->title?></a></h2>
                                
                                 </div>
                                 <div class="user-info">
                                        
                                    <div class="map">
                                        <img  width="32px"src="img/logo/map.png" >
                                        <div class="film"><p id="filming_cities_vacancy"><?= $vacancy->location?></p></div>
                                    </div>
                                    <div>
                                        <img width="30px" src="img/logo/user.png">
                                        <a  href="<?= Url::toRoute(['site/view', 'id'=>$vacancy->user_fv->id]);?>"><?= $vacancy->user_fv->username ?></a>
                                    </div>
                                     <div class="col-lg-6 block_price">
                                     <div class="price-info product-inner-price">
                                        <img src="img/logo/mon.png">
                                       <p>від</p>
                                        <ins>$<?= $vacancy->price?></ins>
                                     </div>
                                    </div>
                                    <div class="col-lg-12 block_descripti">
                                            <img src="img/logo/pen.png">
                                            <p><?= $vacancy->desciption?></p>
                                    </div>   
                                </div>  
                            </div>                     
                        </div>
                    </div>     
                </div>    
                <?php endforeach; ?>

                <div class="row">
                    <div class="col-md-12">
                        <div class="product-pagination text-center">
                            <nav>
                              <?php
                    echo LinkPager::widget([
                        'pagination' => $pagination,
                    ]);
                ?>
                            </nav>                        
                        </div>
                    </div>
                </div>
        </div>
    </div>