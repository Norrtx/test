<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';

?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
      <div class="w-100">
        <h2 class="mb-5">ที่อยู่</h2>
        <ul class="fa-ul mb-0">
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            725 ม.6 ต.ท่าตะโก อ.ท่าตะโก จ.นครสวรรค์ 60160</li>
            <i class="fa-li fa fa-trophy text-warning">โทร 0631896197</i>
           
          </ul>
     
        <div class="col-xs-12"> 
        <iframe src="https://www.google.com/maps/embed?pb=!1m25!1m11!1m3!1d153.16493011844327!2d100.48403114998126!3d15.6323078235334!2m2!1f43.61190450476259!2f45!3
          m2!1i1024!2i768!4f35!4m11!3e0!4m3!3m2!1d15.6335318!2d100.485044!4m5!1s0x30e02e103bd41685%3A0x404fb54b009c2d0!2sTha%20Tako%2C%20Tha%20Tako%20District%2C%20
          Nakhon%20Sawan%2060160!3m2!1d15.6361001!2d100.4733789!5e1!3m2!1sen
          !2sth!4v1573721735088!5m2!1sen!2sth" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
      
      </div>
<!-- Contact -->
<!-- <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contact Us</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section> -->