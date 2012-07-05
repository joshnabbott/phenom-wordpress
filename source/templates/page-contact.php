<?php get_header(); ?>

    <section id="content-top" class="row-fluid">
      <h3>/ <?php single_post_title(); ?> </h3>
    </section>

    <div id="content-primary" class="row-fluid">
      <div class="span6">
        <form action="http://phenom.mailmanhq.com" method="post" class="well form-horizontal">
          <fieldset>
            <div class="control-group">
              <label for="contact-name" class="control-label">Name:</label>
              <div class="controls">
                <input type="text" name="message[sender]" id="contact-name" placeholder="required" class="input-xlarge" />
              </div>
            </div>

            <div class="control-group">
              <label for="contact-email" class="control-label">Email:</label>
              <div class="controls">
                <input type="text" name="message[from]" id="contact-email" placeholder="required" class="input-xlarge" />
              </div>
            </div>

            <div class="control-group">
              <label for="contact-phone" class="control-label">Phone:</label>
              <div class="controls">
                <input type="text" name="message[phone]" id="contact-phone" class="input-xlarge" />
              </div>
            </div>

            <div class="control-group">
              <label for="contact-company" class="control-label">Company:</label>
              <div class="controls">
                <input type="text" name="message[company]" id="contact-company" class="input-xlarge" />
              </div>
            </div>

            <div class="control-group">
              <label for="contact-comments" class="control-label">Comments:</label>
              <div class="controls">
                <textarea name="message[body]" id="contact-comments" placeholder="required" class="input-xlarge"></textarea>
              </div>
            </div>

            <div class="form-action">
              <input type="hidden" name="token" value="6Wml54SUpHwl2Kr62DEIGA==" />
              <input type="hidden" name="redirect_to" value="http://phenom.fm/contact" />
              <input type="hidden" name="message[subject]" value="[PHENOM] - Contact Form" />
              <input type="submit" class="btn btn-primary" value="Submit" />
            </div>
          </fieldset>
        </form>
      </div>
      <div class="span6">
        <p>We're here:</p>
        <address>
          PHENOM Industries LLC<br>
          1677 Superior Ave. #G<br>
          Costa Mesa, CA 92627<br>
          Phone: (714) 486-9537<br>
          Fax: (949) 209-1944
        </address>

        <p>For PHENOM Stickers and other info send $2 and a self addressed stamped envelope to the address below.</p>
        <address>
          PHENOM Industries LLC.<br>
          Attn: PHENOM Stickers<br>
          1677 Superior Ave. #G<br>
          Costa Mesa, CA 92627
        </address>
      </div>
    </div><!-- end content-primary -->

<?php get_footer(); ?>

