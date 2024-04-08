<?php include 'header.php'; ?>
<div class="jumbotron bg-dark">
    <div class="container">
        <h1 class="display-4 text-center" style="color: white; font-weight: bold;">Contact Us </h1>
        <h1 class="display-4 text-center" style="color: white; font-weight: bold;"> </h1>
    </div>
</div>

<br>
<section class="section-lg contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-title">Message</h2>
            </div>
        </div>
        <div class="row contact-bg p-5 rounded mb-5">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <form action="comen.php" method="POST">
                    <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Your Name" max="50">
                    <input type="email" class="form-control mb-3" id="mail" name="mail" placeholder="Your Email"  max="50">
                    <input type="text" class="form-control mb-3" id="subject" name="subject" placeholder="Subject"  max="100">
                    <textarea name="message"  id="message" class="form-control mb-3" placeholder="Your Message"  max="200"></textarea>
                    <button type="submit" value="send" class="btn btn-secondary">SEND MESSAGE</button>
                </form>
            </div>
            <div class="col-lg-5">
                <p class="mb-2">If you'd like to know more about our experience or questions about designing and delivering system solutions, or getting advice on a technology challenge, contact us. With dedicated technicians on standby 24/7, we're here.</p>
                <a href="tel:+6282241569190" class="text-color h5 d-block">+62 822 4156 9190</a>
                <a href="mailto:reza.abdyp@stdent.janabadra.ac.id" class="mb-5 text-color h5 d-block">reza.abdyp@stdent.janabadra.ac.id</a>
              
            </div>
        </div>
    
    </div>

    
    <center>
<div class="map-section">
    <iframe style="border:0; width: 80%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.0034919048776!2d117.49942581432704!3d2.152348398431116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x320df5a9f119d66f%3A0xea55a0a70f69b420!2sJl.%20H.%20Isa%20II%2038%2C%20Karang%20Ambun%2C%20Tj.%20Redeb%2C%20Kabupaten%20Berau%2C%20Kalimantan%20Timur%2077315!5e0!3m2!1sid!2sid!4v1642665534061!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>

  </div>
  </center>
</section>














  

<div class="p-2 mt-5 text-center bg-dark">
    <footer>

    <a class="text-white" href="">R&FSP3I&copy;copyright</a>


    </footer>

</div>
<?php include 'footer.php'; ?>