<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>

    
    
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Рейтинг</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
         <div class="fitr">
            <div class="footer-newsletter">
                <div class="newsletter-form">
                    <label>Тип</label>
                    <select >
                        <option value="1">Фотограф</option>
                        <option value="2">Відеограф</option>
                     </select>
                     <label>Місто</label>
                     <select >
                        <option value="Ужгород">Ужгород</option>
                        <option value="Хмельницька">Хмельницька</option>
                        <option value="Київ">Київ</option>
                        <option value="Харків">Харків</option>
                        <option value="Дніпро">Дніпро</option>
                    </select>
                        <label>від</label>  
                      <input type="text">
                        <label>до</label>  
                      <input type="text">
                    <input type="submit" value="Шукати">
                    <label>Сортувати</label>
                    <select >
                        <option value="1">від дешевих до дорогих</option>
                        <option value="2">від дорогих до дешевих</option>
                     </select>
                </div>
            </div>
        </div>
    </div>
    <div class="single-product-area">
            <div class="zigzag-bottom"></div>
            <div class="container">
    <?php foreach($users as $user):?>

    
    
                <div class="row">
                    <div class=" col-lg-12 col-md-12 col-sm-12">
                        <div class="single-shop-product">
                            <div class="product-upper">
                                <img id="img_float" width="300px" src="<?=$user->getImage_raiting() ?>" alt="">
                                <div class="name_in_raiting">
                                    <h2><a  href="<?= Url::toRoute(['site/view', 'id'=>$user->id]);?>"><?= $user->username?></a></h2>
                                    <p class="user-type"><?= $user->type?></p>
                                 </div>
                                 <div class="user-info">

                                    <div class="map">
                                        <img  width="32px"src="img/logo/map.png" >
                                        <div class="film"><p id="filming_cities_rating"><?= $user->Filming_cities?></p></div>
                                    </div>
                                     <div class="col-lg-6 block_price">
                                     <div class="price-info product-inner-price">
                                        <img src="img/logo/mon.png">
                                       <p>від</p>
                                        <ins><?= $user->price?>$</ins>
                                     </div>
                                    </div>
                                     <div class="col-lg-7 block_rating">
                                    <div class="rating_small">
                                        <div class="set_logo_rating">
                                           <img width="40px" src="img/logo/chart.png">
                                        </div>
                                        <div class="set_line_rating">
                                             <p id="to_right_small">80%</p>
                                             <div class="block_"><div class="litleblock"></div></div>
                                        </div>
                                     </div>
                                     <div class="price-info product-inner-price">
                                        <img src="img/logo/mon.png">
                                        <ins><?= $user->description?></ins>
                                     </div>
                                    </div>
                                </div>  
                            </div>
                             
                            <div class="product-option-shop">
                                <a class="add_to_cart_button" href="user_page.html">Дивитись</a>
                            </div>                       
                        </div>
                    </div>

                    
                   
                </div>
                <?php endforeach; ?>
               
                
                
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-pagination text-center">
                            <nav>
                              <!-- <ul class="pagination">
                                <li>
                                  <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                  </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                  <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                  </a>
                                </li>
                              </ul> -->
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