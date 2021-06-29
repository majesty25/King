<?php

    class item
    {
        var $name;
        var $price;
        var $description;
        var $status;
        var $image;

        function __construct($Name, $Price, $Description, $Status, $Image_main, $Image1, $Image2, $Image3, $Image4)
        {
            $this->name = $Name;
            $this->price = $Price;
            $this->description = $Description;
            $this->status = $Status;
            $this->image_main = $Image_main;
            $this->image1 = $Image1;
            $this->image2 = $Image2;
            $this->image3 = $Image3;
            $this->image4 = $Image4;
        }
    }



    if (isset($_POST['0001'])) {
        $name = '1';
        // echo"helhhhhhhhhhhtyyyiiiiiiiiiiiiiiiy <br> hgggggggggggggggggggggrty";
    } elseif (isset($_POST['0002'])) {
        $name = '2';
    } elseif (isset($_POST['0003'])) {
        $name = '3';
    } elseif (isset($_POST['0004'])) {
        $name = '4';
    } elseif (isset($_POST['0005'])) {
        $name = '5';
    } elseif (isset($_POST['0006'])) {
        $name = '6';
    } elseif (isset($_POST['0007'])) {
        $name = '7';
    } elseif (isset($_POST['0008'])) {
        $name = '8';
    } elseif (isset($_POST['0009'])) {
        $name = '9';
    } elseif (isset($_POST['0010'])) {
        $name = '10';
    } elseif (isset($_POST['0011'])) {
        $name = '11';
    } elseif (isset($_POST['0012'])) {
        $name = '12';
    } elseif (isset($_POST['0013'])) {
        $name = '13';
    } elseif (isset($_POST['0014'])) {
        $name = '14';
    } elseif (isset($_POST['0015'])) {
        $name = '15';
    } elseif (isset($_POST['0016'])) {
        $name = '16';
    } elseif (isset($_POST['0017'])) {
        $name = '17';
    } elseif (isset($_POST['0018'])) {
        $name = '18';
    }

    switch ($name) {
        case '1':
            $Item1 = new item(
                'phone',
                785,
                'jkshdkhdiudis',
                'in stock',
                'font/la.jpg',
                'font/lap2.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg',
                'font/lap6.jpg'
            );
            break;
        case '2':
            $Item1 = new item(
                'phone1',
                1785,
                'jkshdkhdiudis',
                'out of stock',
                'font/lap2.jpg',
                'font/lap5.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg',
                'font/lap6.jpg'
            );
            break;
        case '3':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'in stock',
                'font/shoe1.jpg',
                'font/lap5.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg',
                'font/lap6.jpg'
            );
            break;
        case '4':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'out of stock',
                'font/shoe2.jpg',
                'font/lap5.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg',
                'font/lap6.jpg'
            );
            break;
        case '5':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'out of stock',
                'font/shoe3.jpg',
                'font/lap5.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg',
                'font/lap6.jpg'
            );
            break;
        case '6':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'in stock',
                'font/top1.jpg',
                'font/lap5.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg',
                'font/lap6.jpg'
            );
            break;
        case '7':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'out of stock',
                'font/calcus.jpg',
                'font/lap5.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg',
                'font/lap6.jpg'
            );
            break;
        case '8':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'in stock',
                'font/laptop1.jpg',
                'font/lap5.jpg',
                'font/lap2.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg'
            );
        case '9':
            break;
            // $Item1 = new item('phone3', 985, 'jkshdkhdiudis', 'in stock', 'font/jeans.jpg', 'font/lap5.jpg', 'font/lap2.jpg', 'font/lap4.jpg', 'font/lap3.jpg');
            // break;
        case '10':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'in stock',
                'font/covers.jpg',
                'font/lap5.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg',
                'font/lap6.jpg'
            );
            break;
        case '11':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'in stock',
                'font/shoe2.jpg',
                'font/lap5.jpg',
                'font/lap2.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg'
            );
            break;
        case '12':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'out of stock',
                'font/laptop2.jpg',
                'font/lap5.jpg',
                'font/lap2.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg'
            );
            break;
        case '13':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'in stock',
                'font/lap1.jpg',
                'font/lap5.jpg',
                'font/lap2.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg'
            );
            break;
        case '14':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'in stock',
                'font/shu1.jpg',
                'font/lap5.jpg',
                'font/lap2.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg'
            );
            break;
        case '15':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'in stock',
                'font/lap4.jpg',
                'font/lap5.jpg',
                'font/lap2.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg'
            );
            break;
        case '16':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'in stock',
                'font/shu2.jpg',
                'font/lap5.jpg',
                'font/lap2.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg'
            );
            break;
        case '17':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'in stock',
                'font/new2.jpg',
                'font/lap5.jpg',
                'font/lap2.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg'
            );
            break;
        case '18':
            $Item1 = new item(
                'phone3',
                985,
                'jkshdkhdiudis',
                'in stock',
                'font/bag.jpg',
                'font/lap5.jpg',
                'font/lap2.jpg',
                'font/lap4.jpg',
                'font/lap3.jpg'
            );
            break;
    }
?>