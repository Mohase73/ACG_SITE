@extends('layouts.main')
@section('content')
<section class="page_title ds s-parallax s-overlay s-py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Notre Boutique</h1>
                <ol class="breadcrumb mt-30">
                    <li class="breadcrumb-item">
                        <a href="./">Accueil</a>
                    </li>
                    <li class="breadcrumb-item active">
                        Boutique
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="ls s-py-60 s-py-md-90 s-py-xl-150 c-gutter-60">
    <div class="container">
        <div class="row">

            <main class="col-lg-8 col-xl-8 order-lg-2">
                <div class="product">

                    <div class="images" data-columns="4">
                        <figure>
                            <div data-thumb="images/shop/11.jpg">
                                <a href="images/shop/11.jpg">
                                    <img src="images/shop/11.jpg" alt="img" data-caption="" data-src="images/shop/11.jpg" data-large_image="images/shop/11.jpg" data-large_image_width="1000" data-large_image_height="1000">
                                </a>
                            </div>
                            <div data-thumb="images/shop/11_back.jpg">
                                <a href="images/shop/11_back.jpg">
                                    <img src="images/shop/11_back.jpg" alt="img" data-caption="" data-src="images/shop/11_back.jpg" data-large_image="images/shop/11_back.jpg" data-large_image_width="1000" data-large_image_height="1000">
                                </a>
                            </div>
                            <div data-thumb="images/shop/10_back.jpg">
                                <a href="images/shop/10_back.jpg">
                                    <img src="images/shop/10_back.jpg" alt="img" data-caption="" data-src="images/shop/10_back.jpg" data-large_image="images/shop/10_back.jpg" data-large_image_width="1000" data-large_image_height="1000">
                                </a>
                            </div>
                            <div data-thumb="images/shop/10.jpg">
                                <a href="images/shop/10.jpg">
                                    <img src="images/shop/10.jpg" alt="img" data-caption="" data-src="images/shop/10.jpg" data-large_image="images/shop/10.jpg" data-large_image_width="1000" data-large_image_height="1000">
                                </a>
                            </div>


                        </figure>
                    </div>

                    <div class="summary entry-summary">

                        <h1 class="product_title entry-title">
                            Expédiez votre idée</h1>
                        <div class="woocommerce-product-rating">
                            <div class="star-rating">
                                <span style="width:72.6%">Évalué <strong class="rating">4.33</strong> sur 5 basé sur<span class="rating">3</span>
                                évaluations des clients</span>
                            </div>
                            <a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<span class="count">3</span> Clients
                                Commentaires)</a>
                        </div>

                        <p class="price">
                            <span>
                                <span>fcfa</span>20.00
                            </span>
                        </p>
                        <div>
                            <p>
                                Chez Afric Consulting Group nous vous proposons une solution simple rapide et sécurisée pour revendre votre ordinateur portable PC ou Mac. Qu'il soit en parfait état ou hors service, nous vous proposerons une solution de valorisation.</p>
                        </div>

                        <form>

                            <table class="variations">
                                <tbody>
                                    <tr>

                                        <td class="value">
                                            <label for="pa_color">Couleur</label>
                                            <select id="pa_color" class="wc-default-select" name="attribute_pa_color" data-attribute_name="attribute_pa_color">
                                                <option value="">Choisir une couleure</option>
                                                <option value="blue" class="attached enabled">Bleue</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td class="value">
                                            <label for="pa_size">Marque</label>
                                            <select id="pa_size" class="wc-default-select" name="attribute_pa_size" data-attribute_name="attribute_pa_size">
                                                <option value="">Choisir une marque</option>
                                                <option value="x-small" class="attached enabled">HP</option>
                                                <option value="small" class="attached enabled">Lenovo</option>
                                                <option value="medium" class="attached enabled">Dell</option>
                                                <option value="large" class="attached enabled">Asus</option>
                                                {{--  <option value="x-large" class="attached enabled">X Large</option>
                                                <option value="xx-large" class="attached enabled">XX Large</option>
                                                <option value="xxx-large" class="attached enabled">XXX Large</option>  --}}
                                            </select>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>


                            <div class="single_variation_wrap">
                                <div>
                                    <div class="quantity">
                                        <input type="button" value="+" class="plus">
                                        <i class="fa fa-angle-up" aria-hidden="true"></i>
                                        <input type="number" class="input-text qty text" step="1" min="1" max="1000" name="quantity" value="1" title="Qty" size="4">
                                        <input type="button" value="-" class="minus">
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                    <button type="submit" class="single_add_to_cart_button button alt btn-short">Ajouter une carte</button>

                                </div>
                            </div>


                        </form>

                        <div class="product_meta">


                            <span class="sku_wrapper">SKU: <span class="sku">N/A</span>
                            </span>


                            <span class="posted_in">Categories: <a href="shop-left.html" rel="tag">Machines</a>, <a href="shop-left.html" rel="tag">Ordinateurs</a>
                            </span>
                            <span class="tagged_as">Étiqueter: <a href="shop-left.html" rel="tag">Ventes</a></span>


                        </div>


                    </div>
                    <div class="woocommerce-tabs wc-tabs-wrapper">

                        <ul class="tabs wc-tabs" role="tablist">
                            <li class="description_tab" id="tab-title-description" role="tab" aria-controls="tab-description">
                                <a href="#tab-description">Description</a>
                            </li>
                            <li class="additional_information_tab active" id="tab-title-additional_information" role="tab" aria-controls="tab-additional_information">
                                <a href="#tab-additional_information">Information additionnelle</a>
                            </li>
                            <li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                                <a href="#tab-reviews">
                                    Commentaires (3)</a>
                            </li>
                        </ul>

                        <div class="panel wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">

                            <h2>Description</h2>

                            <p>
                                Pour vendre du matériel informatique en ligne, vous pouvez passer par des plateformes connues (Amazon, eBay, PriceMinister) ou bien créer votre site de e-commerce. Il est possible de faire de la vente informatique à la fois en ligne et en magasin. Il est également possible de faire uniquement l'un ou l'autre..</p>
                        </div>
                        <div class="panel wc-tab" id="tab-additional_information" role="tabpanel" aria-labelledby="tab-title-additional_information">

                            <h2>Information additionnelle</h2>

                            <table class="shop_attributes">


                                <tbody>
                                    <tr>
                                        <th>Couleure</th>
                                        <td>
                                            <p>Grise</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Marque</th>
                                        <td>
                                            <p>Lenovo, HP, Asus, Dell</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="panel wc-tab" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
                            <div id="reviews">
                                <div id="comments">
                                    <h2 class="mb-5">3 avis pour <span>Expédiez votre idée</span>
                                    </h2>


                                    <ol class="commentlist">
                                        <li class="comment">
                                            <article class="comment-body">
                                                <footer class="comment-meta mb-0">
                                                    <div class="comment-author vcard">
                                                        <img alt="img" src="images/team/testimonials_01.jpg">
                                                        <h4 class="mb-0">Nabaloum Louis</h4>
                                                        <p class="font-weight-regular">
                                                           26 dec 2020
                                                        </p>
                                                    </div>
                                                </footer>
                                                <div class="comment-content">
                                                    <p>Vos machine sont de qualité et moin chère ces genre de boutiques sont rares à trouver.</p>
                                                </div>
                                                <div class="reply">
                                                    <a rel="nofollow" class="comment-reply-link" href="#respond" aria-label="Reply to John Doe">Répondre <i class="fa fa-reply" aria-hidden="true"></i></a>
                                                </div>


                                            </article>

                                        </li>
                                        <li class="comment">
                                            <article class="comment-body">
                                                <footer class="comment-meta mb-0">
                                                    <div class="comment-author vcard">
                                                        <img alt="img" src="images/team/testimonials_02.jpg">
                                                        <h4 class="mb-0">Koné Cheick</h4>
                                                        <p class="font-weight-regular">
                                                           20 dec 2020
                                                        </p>
                                                    </div>
                                                </footer>
                                                <div class="comment-content">
                                                    <p>Whaouu vos machine sont moins chère et il y'a toutes les couleures.</p>
                                                </div>
                                                <div class="reply">
                                                    <a rel="nofollow" class="comment-reply-link" href="#respond" aria-label="Reply to John Doe">Répondre <i class="fa fa-reply" aria-hidden="true"></i></a>
                                                </div>


                                            </article>

                                        </li>
                                        <li class="comment">
                                            <article class="comment-body">
                                                <footer class="comment-meta mb-0">
                                                    <div class="comment-author vcard">
                                                        <img alt="img" src="images/team/testimonials_03.jpg">
                                                        <h4 class="mb-0">Guigma Alain</h4>
                                                        <p class="font-weight-regular">
                                                           18 dec 2020
                                                        </p>
                                                    </div>
                                                </footer>
                                                <div class="comment-content">
                                                    <p>Whaaouuu j'espere que c'est pas un rêve je vais contacter mes amis pour qu'il visite votre boutique c'est moins chère.</p>
                                                </div>
                                                <div class="reply">
                                                    <a rel="nofollow" class="comment-reply-link" href="#respond" aria-label="Reply to John Doe">Répondre<i class="fa fa-reply" aria-hidden="true"></i></a>
                                                </div>
                                            </article>
                                        </li>
                                    </ol>
                                </div>
                                <div id="review_form_wrapper">
                                    <div id="review_form">
                                        <div id="respond" class="comment-respond">
                                            <span id="reply-title" class="comment-reply-title">
                                                Ajouter un commentaire <small>
                                                    <a rel="nofollow" id="cancel-comment-reply-link" href="#respond" style="display:none;">Annuler la réponse</a>
                                                </small>
                                            </span>
                                            <form class="contact-form c-mb-20 c-gutter-20" method="post" action="/">

                                                <div class="row">

                                                    <div class="col-sm-4">
                                                        <div class="form-group has-placeholder">
                                                            <label for="name">Nom Complèt <span class="required">*</span></label>
                                                            <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Nom complèt">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group has-placeholder">
                                                            <label for="email">Email <span class="required">*</span></label>
                                                            <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-4">
                                                        <div class="form-group has-placeholder">
                                                            <label for="phone">Téléphone<span class="required">*</span></label>

                                                            <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Numéro">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">

                                                    <div class="col-sm-12">

                                                        <div class="form-group has-placeholder">
                                                            <label for="message">Message</label>

                                                            <textarea aria-required="true" rows="4" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-sm-12 text-left">

                                                        <div class="form-group mt-30">
                                                            <button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-maincolor2">Envoyer
                                                            </button>
                                                        </div>
                                                    </div>

                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear">

                                </div>
                            </div>
                        </div>

                    </div>


                    <section class="up-sells upsells products">

                        <h2>Tu pourrais aussi aimer</h2>

                        <ul class="products">


                            <li class="product">
                                <a href="shop-product-left.html">
                                    <span class="onsale">Serveur!</span>
                                    <img src="images/shop/07.jpg" alt="img">
                                    <h2>Expédiez votre idée</h2>
                                    <div class="star-rating">
                                        <span style="width:80%">Évalué <strong class="rating">4.00</strong> hors de 5</span>
                                    </div>
                                    <span class="price">
                                        <span>
                                            <span>fcfa</span>30.00
                                        </span>
                                        –
                                        <span>
                                            <span>fcfa</span>35.00
                                        </span>
                                    </span>
                                </a>
                                <a rel="nofollow" href="shop-product-left.html" data-quantity="1" data-product_id="40" data-product_sku="" class="button product_type_variable add_to_cart_button">Select
                                    options</a>
                            </li>
                            <li class="product">
                                <a href="shop-product-left.html">
                                    <span class="onsale">Bureau!</span>
                                    <img src="images/shop/06.jpg" alt="img">
                                    <h2>Bureau</h2>
                                    <div class="star-rating">
                                        <span style="width:80%">Évalué <strong class="rating">4.00</strong> hors de 5</span>
                                    </div>
                                    <span class="price">
                                        <span>
                                            <span>fcfa</span>35.00
                                        </span>
                                    </span>
                                </a>
                                <a rel="nofollow" href="#" data-quantity="1" data-product_id="60" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Ajouter au panier</a>
                            </li>

                            <li class="product">
                                <a href="shop-product-left.html">
                                    <span class="onsale">Dev web!</span>
                                    <img src="images/shop/08.jpg" alt="img">
                                    <h2>Solution numérique</h2>
                                    <div class="star-rating">
                                        <span style="width:80%">Évalué <strong class="rating">4.00</strong> hors de 5</span>
                                    </div>
                                    <span class="price">
                                        <span>
                                            <span>fcfa</span>20.00
                                        </span>
                                    </span>
                                </a>
                                <a rel="nofollow" href="#" data-quantity="1" data-product_id="60" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Ajouter au panier</a>
                            </li>
                            <li class="product">
                                <a href="shop-product-left.html">
                                    <span class="onsale">Ordinateurs!</span>
                                    <img src="images/shop/28.jpg" alt="img">
                                    <h2>Ordinateurs</h2>
                                    <div class="star-rating">
                                        <span style="width:90%">Évalué <strong class="rating">4.50</strong> hors de 5</span>
                                    </div>
                                    <span class="price">
                                        <span>
                                            <span>fcfa</span>4.00
                                        </span>
                                    </span>
                                </a>
                                <a rel="nofollow" href="#" data-quantity="1" data-product_id="60" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Ajouter au panier</a>
                            </li>


                        </ul>

                    </section>


                    <section class="related products">

                        <h2>Produits connexes</h2>

                        <ul class="products">


                            <li class="product">
                                <a href="shop-product-left.html">
                                    <img src="images/shop/05.jpg" alt="img">
                                    <h2>Digital</h2>
                                    <div class="star-rating">
                                        <span style="width:80%">Évalué <strong class="rating">4.00</strong> hors de 5</span>
                                    </div>
                                    <span class="price">
                                        <span>
                                            <span>fcfa</span>35.00
                                        </span>
                                    </span>
                                </a>
                                <a rel="nofollow" href="#" data-quantity="1" data-product_id="56" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Ajouter au panier</a>
                            </li>


                            <li class="product">
                                <a href="shop-product-left.html">
                                    <img src="images/shop/04.jpg" alt="img">
                                    <h2>Carte </h2>
                                    <div class="star-rating">
                                        <span style="width:60%">Évalué <strong class="rating">3.00</strong> hors de 5</span>
                                    </div>
                                    <span class="price">
                                        <span>
                                            <span>fcfa</span>35.00
                                        </span>
                                    </span>
                                </a>
                                <a rel="nofollow" href="#" data-quantity="1" data-product_id="53" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Ajouter au panier</a>
                            </li>


                            <li class="product">
                                <a href="shop-product-left.html">
                                    <img src="images/shop/02.jpg" alt="img">
                                    <h2>Carte</h2>
                                    <div class="star-rating">
                                        <span style="width:90%">Évalué <strong class="rating">4.50</strong> hors de 5</span>
                                    </div>
                                    <span class="price">
                                        <span>
                                            <span>fcfa</span>35.00
                                        </span>
                                    </span>
                                </a>
                                <a rel="nofollow" href="#" data-quantity="1" data-product_id="47" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Ajouter au panier</a>
                            </li>


                            <li class="product">
                                <a href="shop-product-left.html">
                                    <img src="images/shop/06.jpg" alt="img">
                                    <h2>Bureau</h2>
                                    <div class="star-rating">
                                        <span style="width:80%">Évalué <strong class="rating">4.00</strong> hors de 5</span>
                                    </div>
                                    <span class="price">
                                        <span>
                                            <span>fcfa</span>35.00
                                        </span>
                                    </span>
                                </a>
                                <a rel="nofollow" href="#" data-quantity="1" data-product_id="60" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Ajouter au panier</a>
                            </li>


                            <li class="product">
                                <a href="shop-product-left.html">
                                    <img src="images/shop/03.jpg" alt="img">
                                    <h2>Caméra</h2>
                                    <div class="star-rating">
                                        <span style="width:90%">Évalué <strong class="rating">4.50</strong> hors de 5</span>
                                    </div>
                                    <span class="price">
                                        <span>
                                            <span>fcfa</span>37.00
                                        </span>
                                    </span>
                                </a>
                                <a rel="nofollow" href="#" data-quantity="1" data-product_id="97" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Ajouter au panier</a>
                            </li>


                        </ul>

                    </section>


                </div>
            </main>

            <aside class="col-lg-4 col-xl-4 order-lg-1 mb-0">
                <div class="widget woocommerce widget_product_categories">
                    <h3 class="widget-title">Server Web</h3>
                    <ul class="product-categories">
                        <li class="cat-item cat-parent">
                            <a href="shop-right.html">HP</a>
                            <span class="count">(12)</span>
                            <ul class="children">
                                <li class="cat-item">
                                    <a href="shop-right.html">Lenovo</a>
                                    <span class="count">(46)</span>
                                </li>
                                <li class="cat-item">
                                    <a href="shop-right.html">Dell</a>
                                    <span class="count">(165)</span>
                                </li>
                            </ul>
                        </li>
                        <li class="cat-item cat-parent">
                            <a href="shop-right.html">Mac</a>
                            <span class="count">(16)</span>
                            <ul class="children">
                                <li class="cat-item">
                                    <a href="shop-right.html">Asus</a>
                                    <span class="count">(24)</span>
                                </li>
                                <li class="cat-item">
                                    <a href="shop-right.html">Électronique</a>
                                    <span class="count">(2)</span>
                                </li>
                            </ul>
                        </li>
                        <li class="cat-item">
                            <a href="shop-right.html">Bureau</a>
                            <span class="count">(45)</span>
                        </li>
                    </ul>
                </div>


                <div class="widget widget_product_search">

                    <h3 class="widget-title">Chercher</h3>

                    <form role="search" class="woocommerce-product-search" action="/">

                        <label class="screen-reader-text" for="woocommerce-product-search-field-widget">
                            Rechercher:
                        </label>

                        <input type="search" id="woocommerce-product-search-field-widget" class="search-field" placeholder="Recherche de produits..." value="" name="search">
                        <input type="submit" value="Search">
                    </form>
                </div>

                <div class="widget woocommerce widget_shopping_cart">

                    <h3 class="widget-title">Panier</h3>

                    <div class="widget_shopping_cart_content">

                        <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                            <li class="woocommerce-mini-cart-item mini_cart_item">
                                <a href="#" class="remove" aria-label="Remove this item" data-product_id="73" data-product_sku="">×</a>
                                <a href="shop-product-right.html">
                                    <img src="images/shop/26.jpg" alt="img">Les cartes mères sont en promotion
                                </a>

                                <span class="quantity">1 ×
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">fcfa</span>
                                        12.00
                                    </span>
                                </span>
                            </li>
                            <li class="woocommerce-mini-cart-item mini_cart_item">
                                <a href="#" class="remove" aria-label="Remove this item" data-product_id="76" data-product_sku="">×</a>
                                <a href="shop-product-right.html">
                                    <img src="images/shop/26.jpg" alt="img">Il y'a une réduction de 30% hatez vous stock limité
                                </a>

                                <span class="quantity">1 ×
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">fcfa</span>
                                        15.00
                                    </span>
                                </span>
                            </li>
                        </ul>

                        <p class="woocommerce-mini-cart__total total">
                            <strong>Total:</strong>
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">fcfa</span>
                                27.00
                            </span>
                        </p>

                        <p class="woocommerce-mini-cart__buttons buttons mt-50">
                            <a href="shop-cart.html" class="button mb-0 wc-forward">Voir le panier</a>
                        </p>
                    </div>
                </div>


                <div class="widget woocommerce widget_top_Évalué_products">
                    <h3 class="widget-title">Meilleurs produits</h3>
                    <ul class="product_list_widget">
                        <li>
                            <a href="shop-product-right.html">
                                <img src="images/shop/01.jpg" alt="img">
                                <span class="product-title">Smartphone</span>
                            </a>
                            <div class="star-rating">
                                <span style="width:100%">Évalué
                                    <strong class="rating">5.00 </strong>
                                    hors de 5
                                </span>
                            </div>
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">fcfa</span>
                                20.00
                            </span>
                        </li>

                        <li>
                            <a href="shop-product-right.html">
                                <img src="images/shop/02.jpg" alt="img">
                                <span class="product-title">Électronique</span>
                            </a>
                            <div class="star-rating">
                                <span style="width:100%">Évalué
                                    <strong class="rating">5.00</strong>
                                    hors de 5
                                </span>
                            </div>
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">fcfa</span>
                                9.00
                            </span>
                        </li>

                        <li>
                            <a href="shop-product-right.html">
                                <img src="images/shop/03.jpg" alt="img">
                                <span class="product-title">Caméra</span>
                            </a>
                            <div class="star-rating">
                                <span style="width:100%">Évalué
                                    <strong class="rating">5.00</strong>
                                    hors de 5
                                </span>
                            </div>
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">fcfa</span>
                                18.00
                            </span>
                        </li>

                        <li>
                            <a href="shop-product-right.html">
                                <img src="images/shop/04.jpg" alt="img">
                                <span class="product-title">Qualité carte</span>
                            </a>
                            <div class="star-rating">
                                <span style="width:93.4%">Évalué
                                    <strong class="rating">4.67</strong>
                                    hors de 5
                                </span>
                            </div>
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">fcfa</span>
                                35.00
                            </span>
                        </li>

                        <li>
                            <a href="shop-product-right.html">
                                <img src="images/shop/05.jpg" alt="img">
                                <span class="product-title">Qualité ordinateur</span>
                            </a>
                            <div class="star-rating">
                                <span style="width:90%">Évalué
                                    <strong class="rating">4.50</strong>
                                    hors de 5
                                </span>
                            </div>
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">fcfa</span>
                                20.00
                            </span>
                        </li>
                    </ul>
                </div>


                {{--  <div class="widget woocommerce widget_price_filter">

                    <h3 class="widget-title">Price Filter</h3>

                    <form method="get" action="/">
                        <div class="price_slider_wrapper">
                            <div class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" style="">
                                <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 10%; width: 70%;">

                                </div>
                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 10%;">
                                    <span class="from">fcfa21</span>
                                </span>
                                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 80%;">
                                    <span class="to">fcfa28</span>
                                </span>
                            </div>
                            <div class="price_slider_amount">
                                <input type="text" id="min_price" name="min_price" value="" data-min="20" placeholder="Min price" style="display: none;">
                                <input type="text" id="max_price" name="max_price" value="" data-max="30" placeholder="Max price" style="display: none;">
                                <button type="submit" class="button mt-4">Filter</button>

                                <div class="clear"></div>

                            </div>
                        </div>
                    </form>
                </div>  --}}
{{--

                <div class="widget woocommerce widget_layered_nav">
                    <h3 class="widget-title">Filters</h3>
                    <ul>
                        <li class="wc-layered-nav-term chosen">
                            <a href="shop-right.html">Black</a>
                            <span class="count">(85)</span>
                        </li>
                        <li class="wc-layered-nav-term">
                            <a href="#">Blue</a>
                            <span class="count">(12)</span>
                        </li>
                        <li class="wc-layered-nav-term">
                            <a href="#">Green</a>
                            <span class="count">(41)</span>
                        </li>
                        <li class="wc-layered-nav-term">
                            <a href="#">Yellow</a>
                            <span class="count">(12)</span>
                        </li>
                        <li class="wc-layered-nav-term">
                            <a href="#">Red</a>
                            <span class="count">(26)</span>
                        </li>
                    </ul>
                </div>


                <div class="widget woocommerce widget_product_tag_cloud">

                    <h3 class="widget-title">Price Filter</h3>

                    <div class="tagcloud">
                        <a href="shop-right.html" class="tag-cloud-link" aria-label="album (1 product)">
                            Album
                        </a>
                        <a href="shop-right.html" class="tag-cloud-link" aria-label="premium (1 product)">
                            Premium
                        </a>
                        <a href="shop-right.html" class="tag-cloud-link" aria-label="product (1 product)">
                            Product
                        </a>
                        <a href="shop-right.html" class="tag-cloud-link" aria-label="single (1 product)">
                            Single
                        </a>
                    </div>
                </div>


                <div class="widget woocommerce widget_layered_nav">
                    <h3 class="widget-title">Colors Filter</h3>

                    <select class="dropdown_layered_nav_color">
                        <option value="">Any color</option>
                        <option value="black">Black</option>
                        <option value="blue">Blue</option>
                        <option value="green">Green</option>
                    </select>

                </div>  --}}

            </aside>

        </div>

    </div>
</section>

@endsection
