<?php
if (!defined('ABSPATH'))
  exit;

?>
<div class="wpm-6310">
  <div class="wpm-6310-row wpm-6310-row-plugins">
    <h1 class="wpm-6310-wpmart-all-plugins">WpMart Services</h1>
  </div>
</div>

<div class="wpm-6310-service-details"></div>

<style>
  .wpm-6310-wpmart-all-plugins{
    margin: 20px 0 15px !important; 
  }
  .wpm-6310-service-details {
    width: calc(100% + 5px);
    margin-left: -15px;
    display: flex;
    flex-wrap: wrap;
  }

  .wpm-6310-container {
    float: left;
    width: 100%;
    height:100%;
    overflow: hidden;
    border: 1px solid #d9d9d9;
    box-sizing: border-box;
    background: #fff;
    transition: .5s;
  }

  a.wpm-6310-container:hover,
  a.wpm-6310-container:hover .wpm-6310-price-box-wrapper,
  a.wpm-6310-container:focus,
  a.wpm-6310-container:active {
    border-color: #7e7e7ec9;
    outline: none;
    box-shadow: none;
  }

  .wpm-6310-banner {
    float: left;
    width: 100%;
    position: relative;
    overflow: hidden;
    border-bottom: 1px solid lightgray;
  }

  .wpm-6310-banner img {
    float: left;
    width: 100%;
    transition: .5s;
  }

  .wpm-6310-container:hover .wpm-6310-banner img {
    transform: scale(1.03);
  }

  .wpm-6310-icon-1 {
    position: absolute;
    top: 50%;
    right: -50px;
    color: #727272;
    font-size: 15px;
    background: white;
    width: 30px;
    height: 30px;
    text-align: center;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    transform: translateY(-50%);
    transition: .5s;
  }

  .wpm-6310-container:hover .wpm-6310-icon-1 {
    right: 0;
  }

  .wpm-6310-icon-2 {
    position: absolute;
    top: 50%;
    left: -50px;
    color: #727272;
    font-size: 15px;
    background: white;
    width: 30px;
    height: 30px;
    text-align: center;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    transform: translateY(-50%);
    transition: .5s;
  }

  .wpm-6310-container:hover .wpm-6310-icon-2 {
    left: 0;
  }

  .wpm-6310-content {
    float: left;
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
  }

  .wpm-6310-content-title {
    float: left;
    width: 100%;
    font-size: 16px;
    text-decoration: none;
    color: #000;
    padding: 10px 0;
    font-weight: 400;
    transition: .3s;
  }

  a.wpm-6310-container:hover .wpm-6310-content-title {
    color: #1dbf73;
  }

  .wpm-6310-content-description {
    float: left;
    width: 100%;
    font-size: 14px;
    text-decoration: none;
    cursor: pointer;
    color: #95979d;
    line-height: 22px;
    font-weight: 400;
    box-sizing: border-box;
    transition: .15s ease-in-out;
    padding: 5px 0;
  }

  a.wpm-6310-container:hover .wpm-6310-content-description {
    color: #19a463;
  }

  .our-service-list-wrapper {
    float: left;
    width: 100%;
  }

  .our-service-list {
    display: flex;
    align-items: center;
  }

  .our-service-list svg {
    width: 12px;
    height: 12px;
    fill: #1dbf73;
    padding-right: 8px;
  }

  .our-service-list {
    display: flex;
    align-items: center;
    color: #62646a;
    font: 13px/20px Macan, Helvetica Neue, Helvetica, Arial, sans-serif;
    padding: 3px 0;
  }

  .wpm-6310-price-box-wrapper {
    float: left;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    width: 100%;
    padding: 15px 10px;
    box-sizing: border-box;
    border-bottom: 1px solid #d9d9d9;
    transition: .5s;
  }

  .wpm-6310-price-title {
    color: #74767e;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: .5px;
    text-transform: uppercase;
    display: inline-block;
    vertical-align: top;
    padding: 2px 0 0;
  }

  .wpm-6310-price {
    font-size: 20px;
    line-height: 20px;
    color: #404145;
    margin-left: 5px;
  }
  .wpm-6310-service-image{
   display: none;
 }
</style>
