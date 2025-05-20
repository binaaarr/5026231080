<head>
    <style>
        .pagination {
            display: inline-block;
        }
        .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            border: 1px solid #0d5880;
            font-size: 22px;
        }
        .pagination a.active {

        ul.a{
            list-style-type: disc;
            list-style-position: outside;
            margin: 35;
            padding: 20;
            background: blue;
        }
        ol.b{
            list-style-type: decimal;
            list-style-position: inside;
        }

  background-color: #4CAF50;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
.pagination a:first-child {
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
}

.pagination a:last-child {
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
}
.center {
  text-align: center;
}
    </style>
</head>

</head>
<body>

<p>Menu Berbuka Puasa</p>
<ul class="a">
    <li>Ayam Bakar</li>
    <li>Udang Saus Padang</li>
    <li>Beef Teriyaki</li>
</ul>

<p>Urutan Pemenang Lomba Lari</p>
<ol class="b">
    <li>Anya</li>
    <li>Nobita</li>
    <li>Mail</li>
</ol>

<h2>Pagination</h2>

<div class="center">
<div class="pagination">
  <a href="#" class="first-child">&laquo;</a>
  <a href="#">1</a>
  <a href="#" class = "active">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#" class="last-child">&raquo;</a>
</div>
</div>


</body>


