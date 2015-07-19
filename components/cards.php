<?php
/*
Materializer - Material Design components for WordPress
Copyright (c) Cody Reichert - 2015
*/

/* Code starts here */

class Cards extends MaterializerShortcodes {

    /**
     * Basic Card [card]
     * Available Attributes:
     * @actionLink:  Card action links
     * @color:       background color
     * @textColor:   text color
     * @size:        small/medium/large
     */
    public function basicCard( $atts ) {
        $title = $atts['title'];
        ob_start();
        ?>
                <div class="card">
                    <div class="card-content">
                        <span class="card-title"><?php echo $title; ?></span>
                        <p>
                            I am a very simple card. I am good at
                            containing small bits of information. I
                            am convenient because I require little
                            markup to use effectively.
                        </p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                        <a href="#">This is a link</a>
                    </div>
                </div>
        <?php
        return ob_get_clean();
    }

    /**
     * Image Card [card_img]
     * Available Attributes:
     * @img:         The background image
     * @actionLink:  Card action links
     * @color:       background color
     * @textColor:   text color
     * @size:        small/medium/large
     */
    public function imageCard($atts, $content) {
        ob_start();
        ?>
          <div class="card">
              <div class="card-image">
                  <img src="https://simplyrets.com/images/scrot1.png">
                  <span class="card-title">Title</span>
              </div>
              <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information.
                     I am convenient because I require little markup to use effectively.
                  </p>
              </div>
              <div class="card-action">
                  <a href="#">This is a link</a>
              </div>
          </div>
        <?php
        return ob_get_clean();
    }

    /**
     * Reveal Card [card_reveal]
     * Available Attributes:
     * @img:         The background image
     * @actionLink:  Card action links
     * @color:       background color
     * @textColor:   text color
     * @size:        small/medium/large
     */
    public function revealCard($atts, $content) {
        ob_start();
        ?>
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img src="https://simplyrets.com/images/scrot1.png">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">
                        Card Title
                        <i class="material-icons right">more_vert</i>
                    </span>
                    <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">
                        Card Title
                        <i class="material-icons right">close</i>
                    </span>
                    <p>
                        Here is some more information about this product that is only revealed once clicked on.
                    </p>
              </div>
            </div>

        <?php
        return ob_get_clean();
    }

    /**
     * Panel Card [card_panel]
     * @color:       background color
     * @textColor:   text color
     */
    public function panelCard($atts, $content) {
        ob_start();
        ?>
            <div class="card-panel teal">
                <span class="white-text">
                    I am a very simple card. I am good at containing
                    small bits of information.  I am convenient
                    because I require little markup to use
                    effectively. I am similar to what is called a
                    panel in other frameworks.
                </span>
            </div>
        <?php
        return ob_get_clean();
    }
}