<?php
header('content-type: text/css;') //connect css in php



 ?>
 *{
   margin:0;padding:0
 }
 body{
     background: 000;
     padding-left: 40vh;
     padding-top: 50px;
     background-color: rgba(255, 255, 128, .5);
   }
   .end{
     text-decoration: none;
     color: black;
   }
  .head{
    color: black;
    padding-left:40vh;
  }
 .content-table {
   border-collapse: collapse;
   margin: 25px 0;
   font-size: 0.9em;
   min-width: 400px;
   border-radius: 5px 5px 0 0;
   overflow: hidden;
   box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
 }

 .content-table thead tr {
   background-color: #009879;
   color: #ffffff;
   text-align: left;
   font-weight: bold;
 }

 .content-table th,
 .content-table td {
   padding: 12px 15px;
 }

 .content-table tbody tr {
   border-bottom: 1px solid #dddddd;
 }

 .content-table tbody tr:nth-of-type(even) {
   background-color: #f3f3f3;
 }

 .content-table tbody tr:last-of-type {
   border-bottom: 2px solid #009879;
 }

 .content-table tbody tr a{
   text-decoration: none;
   color: brown;
}
