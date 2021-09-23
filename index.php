<?php get_header(); ?>
    
<div class="tm-container">
      <div class="tm-text-white tm-page-header-container">
        <i class="fas fa-mug-hot fa-2x tm-page-icon"></i>
        <h1 class="tm-page-header">Bloggy</h1>
      </div>
      <div class="tm-main-content">
        <!-- <div id="tm-intro-img"></div> -->
        <!-- Coffee Menu -->
        <section class="tm-section">
          <?php if (current_user_can('administrator')) { ?>
          <h2 class="tm-section-header">Create Post</h2>
          <div class="admin-quick-add">
                  <input type="text" name="title" placeholder="Title">
                  <textarea name="content" placeholder="Content"></textarea>
                  <button id="quick-add-button">Create Post</button>
          </div>
          <?php} else { ?>
            <h2 class="tm-section-header">Sign in to create post</h2>
          <?php } ?>
          <div class="tm-responsive-table">
            <table>
              <tr class="tm-tr-header">
                <th>Post title</th>
                <th>Post description</th>
                <th>Post status</th>
                <!-- <th>Blended</th> -->
              </tr>
              <tr>
                <td class="tm-text-left">Americano</td>
                <td>$10</td>
                <td>$15</td>
              </tr>
              <tr>
                <td class="tm-text-left">Cuppucino</td>
                <td>$15</td>
                <td>$18</td>
              </tr>
              <tr>
                <td class="tm-text-left">Fresh Latte</td>
                <td>$10</td>
                <td>$18</td>
              </tr>
              <tr>
                <td class="tm-text-left">Mocha</td>
                <td>$15</td>
                <td>$18</td>
              </tr>
              <tr>
                <td class="tm-text-left">Espresso</td>
                <td>$10</td>
                <td>$15</td>
              </tr>
              <tr>
                <td class="tm-text-left">Black Coffee</td>
                <td>$15</td>
                <td>-</td>
              </tr>
              <!-- <tr>
                <td class="tm-text-left">Double Shot Expresso</td>
                <td>$20</td>
                <td>$20</td>
                <td>-</td>
              </tr> -->
            </table>
          </div>
        </section>

        <!-- Tea Menu -->
        <!-- <section class="tm-section">
          <h2 class="tm-section-header">Tea Menu</h2>
          <div class="tm-responsive-table">
            <table>
              <tr class="tm-tr-header">
                <th>&nbsp;</th>
                <th>Hot</th>
                <th>Iced</th>
                <th>Addon</th>
              </tr>
              <tr>
                <td class="tm-text-left">Pure White Milk</td>
                <td>$5</td>
                <td>$10</td>
                <td>-</td>
              </tr>
              <tr>
                <td class="tm-text-left">Hong Kong Tea</td>
                <td>$8</td>
                <td>$12</td>
                <td>$4</td>
              </tr>
              <tr>
                <td class="tm-text-left">Taiwan Tea</td>
                <td>$4</td>
                <td>$10</td>
                <td>$4</td>
              </tr>
              <tr>
                <td class="tm-text-left">Bubble Tea</td>
                <td>$8</td>
                <td>$12</td>
                <td>-</td>
              </tr>
              <tr>
                <td class="tm-text-left">Mixed Fruit Tea</td>
                <td>$10</td>
                <td>$10</td>
                <td>$8</td>
              </tr>
              <tr>
                <td class="tm-text-left">Original Tea</td>
                <td>$12</td>
                <td>$12</td>
                <td>-</td>
              </tr>
            </table>
          </div>
        </section> -->

        <!-- Special Items -->
        <!-- <section class="tm-section">
          <h2 class="tm-section-header">Special Items</h2>
          <div class="tm-special-items">
            <figure class="tm-special-item">
              <img src="img/chilling-cafe-11.jpg" alt="Image" class="tm-special-item-img" />
              <figcaption>
                <span class="tm-item-name">Soft Deli Cup</span>
                <span class="tm-item-price">$25</span>
              </figcaption>
            </figure>
            <figure class="tm-special-item">
              <img src="img/chilling-cafe-12.jpg" alt="Image" class="tm-special-item-img" />
              <figcaption>
                <span class="tm-item-name">Coffee Art</span>
                <span class="tm-item-price">$30</span>
              </figcaption>
            </figure>
            <figure class="tm-special-item">
              <img src="img/chilling-cafe-13.jpg" alt="Image" class="tm-special-item-img" />
              <figcaption>
                <span class="tm-item-name">Speciality Tea</span>
                <span class="tm-item-price">$35</span>
              </figcaption>
            </figure>
          </div>
        </section> -->
        <hr />
        <!-- About our cafe -->
        <!-- <section class="tm-section tm-section-small">
          <h2 class="tm-section-header">About our cafe</h2>
          <p>
            Chilling Cafe is a simple HTML website template provided by
            Tooplate. Feel free to use it for your cafe or coffee shop. This
            layout is a mobile and tablet friendly.
          </p>
          <p class="tm-mb-0">
            You can download and use this HTML one-page template for your business. 
            You are not allowed to re-host the template ZIP file on your template 
            collection sites. Thank you.
          </p>
        </section>
        <hr /> -->
     

      <?php get_footer(); ?>