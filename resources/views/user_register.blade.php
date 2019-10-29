@extends('layouts.register_app')
@section('content')
<link href="{{asset('css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('csss/animsition.min.css')}}" rel="stylesheet" media="all">
    <!-- <link href="css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all"> -->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('css/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('css/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('css/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('css/theme.css')}}" rel="stylesheet" media="all">

<body class="animsition">
    <div class="page-wrapper">

        <!-- PAGE CONTAINER-->
        <div class="page-container">

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid"><!--
                        <h2 class="title-1 m-b-25">Enter the Student Informations!</h2> -->
                        <span style="text-align:center;">
                        <h2 class="title-1 m-b-25">(ကျောင်းသားမှတ်ပုံတင်ခြင်းလျှောက်လွှာ)<br>
                            (၂၀၁၈-၂၀၁၉) ပညာသင်နှစ်<br>
                            ကျောင်းသား ကျောင်းသူများ ပညာသင်ခွင်လျှောက်လွှာ<br>
                            သတင်းအချက်အလက်နည်းပညာ တက္ကသိုလ်<br>
                            တတိယနှစ် (CS/CT) သင်တန်း
                        </h2>
                        </span>
                        <!-- <form action="a.php"> -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>ပညာဆက်လက်သင်သူကျောင်းသား/သူ</strong>
                                        <small> Data</small>
                                    </div>

                                <div class="card-body card-block">
                                        <!--mine-->

                                    <div class="student-data"> <!-- start student -->


                                        <div class="col-lg-0 text-center">
                                            <div class="my-img">
                                                <img src="img/student.png" width="220px" height="220px" class="img-fluid rounded">
                                            </div>

                                            <div class="col-lg-2 col-md-4 col-sm-6 col-12 text-left">
                                                <div class="btn btn-primary" id="addpassedexambut">
                                                    Update &nbsp;<i class='fa fa-plus'></i>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">သင်တန်းနှစ်</label>
                                            <input type="text" id="company" placeholder="သင်တန်းနှစ်" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">ခုံအမှတ်</label>
                                            <input type="text" id="company" placeholder="ခုံအမှတ်" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">တက္ကသိုလ်ဝင်ရောက်သည်ခုနှစ်</label>
                                            <input type="text" id="company" placeholder="တက္ကသိုလ်ဝင်ရောက်သည်ခုနှစ်" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">တက္ကသိုလ်မှတ်ပုံတင်အမှတ်</label>
                                            <input type="text" id="company" placeholder="တက္ကသိုလ်မှတ်ပုံတင်အမှတ်" class="form-control">
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <p class="subtitle" id="part1title"><span style="color: darkcyan">၁။ ပညာဆက်လက်သင်ခွင့်တောင်းသူ</span></p>
                                            </div>
                                        </div>
                                        <br>
                                        <!--mine end-->
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">အမည် ( မြန်မာစာဖြင့် )</label>
                                            <input type="text" id="company" placeholder="အမည် ( မြန်မာစာဖြင့် )" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">အမည် ( အင်္ဂလိပ်စာဖြင့် )</label>
                                            <input type="text" id="company" placeholder="အမည် ( အင်္ဂလိပ်စာဖြင့် )" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">လူမျိုး</label>
                                            <input type="text" id="vat" placeholder="လူမျိုး" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">ကိုးကွယ်သည့်ဘာသာ</label>
                                            <input type="text" id="street" placeholder="ကိုးကွယ်သည့်ဘာသာ" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">မွေးဖွားရာဇာတိ</label>
                                            <input type="text" id="street" placeholder="မွေးဖွားရာဇာတိ" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">မြို့နယ်/ပြည်နယ်/တိုင်း</label>
                                            <input type="text" id="street" placeholder="မြို့နယ်/ပြည်နယ်/တိုင်း" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">လူမျိုး</label>
                                            <input type="text" id="vat" placeholder="လူမျိုး" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">မှတ်ပုံတင်အမှတ်</label>
                                            <input type="text" id="vat" placeholder="လူမှတ်ပုံတင်အမှတ်မျိုး" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">နိုင်ငံခြားသား</label>
                                            <input type="text" id="country" placeholder="နိုင်ငံခြားသား" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">မွေးသက္ကရာဇ်/သွေးအုပ်စု</label>
                                            <input type="text" id="country" placeholder="မွေးသက္ကရာဇ်/သွေးအုပ်စု" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">အမြဲတမ်းနေထိုင်သည့်လိပ်စာ(အပြည့်အစုံ)</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">ဖုန်းနံပါတ်</label>
                                            <input type="text" id="country" placeholder="ဖုန်းနံပါတ်" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">အီးမေးလ် လိပ်စာ</label>
                                            <input type="text" id="country" placeholder="အီးမေးလ် လိပ်စာ" class="form-control">
                                        </div>

                                        <div class="card-footer">
                                        <button class="btn btn-primary student-back">
                                            <i class="fa fa-backward"></i> &nbsp;<a href="index.php" style="color: #fff;">Back</a>
                                        </button>

                                        <button class="btn btn-primary student-next">
                                            <i class="fa fa-angle-double-right"></i> Next
                                        </button>
                                        </div>


                                    <hr>
                                    </div> <!--  end student -->


                                    <div class="parent-data"> <!-- start parent -->

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <p class="subtitle" id="part1title"><span style="color: darkcyan">အဘ</span></p>
                                            </div>
                                        </div>
                                        <br>
                                        <!--mine-->
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">အမည် ( မြန်မာစာဖြင့် )</label>
                                            <input type="text" id="company" placeholder="အမည် ( မြန်မာစာဖြင့် )" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">အမည် ( အင်္ဂလိပ်စာဖြင့် )</label>
                                            <input type="text" id="company" placeholder="အမည် ( အင်္ဂလိပ်စာဖြင့် )" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">လူမျိုး</label>
                                            <input type="text" id="vat" placeholder="လူမျိုး" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">ကိုးကွယ်သည့်ဘာသာ</label>
                                            <input type="text" id="street" placeholder="ကိုးကွယ်သည့်ဘာသာ" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">မွေးဖွားရာဇာတိ</label>
                                            <input type="text" id="street" placeholder="မွေးဖွားရာဇာတိ" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">မြို့နယ်/ပြည်နယ်/တိုင်း</label>
                                            <input type="text" id="street" placeholder="မြို့နယ်/ပြည်နယ်/တိုင်း" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">မှတ်ပုံတင်အမှတ်</label>
                                            <input type="text" id="vat" placeholder="လူမှတ်ပုံတင်အမှတ်မျိုး" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">နိုင်ငံခြားသား</label>
                                            <input type="text" id="country" placeholder="နိုင်ငံခြားသား" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">မွေးသက္ကရာဇ်/သွေးအုပ်စု</label>
                                            <input type="text" id="country" placeholder="မွေးသက္ကရာဇ်/သွေးအုပ်စု" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">အလုပ်အကိုင်</label>
                                            <input type="text" id="country" placeholder="အလုပ်အကိုင်" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">ရာထူးနှင့်ဌာန</label>
                                            <input type="text" id="country" placeholder="ရာထူးနှင့်ဌာန" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">လိပ်စာ(အလုပ်)
`                                           </label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">ဖုန်းနံပါတ်</label>
                                            <input type="text" id="country" placeholder="ဖုန်းနံပါတ်" class="form-control">
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <p class="subtitle" id="part1title"><span style="color: darkcyan">အမိ</span></p>
                                            </div>
                                        </div>
                                        <br>
                                        <!--mine-->
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">အမည် ( မြန်မာစာဖြင့် )</label>
                                            <input type="text" id="company" placeholder="အမည် ( မြန်မာစာဖြင့် )" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">အမည် ( အင်္ဂလိပ်စာဖြင့် )</label>
                                            <input type="text" id="company" placeholder="အမည် ( အင်္ဂလိပ်စာဖြင့် )" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">လူမျိုး</label>
                                            <input type="text" id="vat" placeholder="လူမျိုး" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">ကိုးကွယ်သည့်ဘာသာ</label>
                                            <input type="text" id="street" placeholder="ကိုးကွယ်သည့်ဘာသာ" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">မွေးဖွားရာဇာတိ</label>
                                            <input type="text" id="street" placeholder="မွေးဖွားရာဇာတိ" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="street" class=" form-control-label">မြို့နယ်/ပြည်နယ်/တိုင်း</label>
                                            <input type="text" id="street" placeholder="မြို့နယ်/ပြည်နယ်/တိုင်း" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">မှတ်ပုံတင်အမှတ်</label>
                                            <input type="text" id="vat" placeholder="လူမှတ်ပုံတင်အမှတ်မျိုး" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">နိုင်ငံခြားသား</label>
                                            <input type="text" id="country" placeholder="နိုင်ငံခြားသား" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">မွေးသက္ကရာဇ်/သွေးအုပ်စု</label>
                                            <input type="text" id="country" placeholder="မွေးသက္ကရာဇ်/သွေးအုပ်စု" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">အလုပ်အကိုင်</label>
                                            <input type="text" id="country" placeholder="အလုပ်အကိုင်" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">ရာထူးနှင့်ဌာန</label>
                                            <input type="text" id="country" placeholder="ရာထူးနှင့်ဌာန" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">လိပ်စာ(အလုပ်)</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">ဖုန်းနံပါတ်</label>
                                            <input type="text" id="country" placeholder="ဖုန်းနံပါတ်" class="form-control">
                                        </div>

                                        <div class="card-footer">
                                        <button class="btn btn-primary parent-prev">
                                            <i class="fa fa-angle-double-left"></i> Previous
                                        </button>
                                        <button class="btn btn-primary parent-next">
                                            <i class="fa fa-angle-double-right"></i> Next
                                        </button>
                                        </div>


                                    <hr>
                                    </div><!--   end parent -->
                                    <div class="guardian">  <!-- start guardian -->

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <p class="subtitle" id="part1title" style="padding-bottom: 25px"><span style="color: darkcyan">တက္ကသိုလ်ဝင်တန်းစာမေးပွဲအောင်မြင်သည့်-</span></p>
                                            </div>
                                            <div class="form-group" style="padding-left: 15px;padding-right: 25px;">
                                                <label for="country" class=" form-control-label">ခုံအမှတ်</label>
                                                <input type="text" id="country" placeholder="ခုံအမှတ်" class="form-control">
                                            </div>
                                            <div class="form-group" style="padding-right: 25px;">
                                                <label for="country" class=" form-control-label">ခုနှစ်</label>
                                                <input type="text" id="country" placeholder="ခုနှစ်" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="country" class=" form-control-label">စာစစ်ဌာန</label>
                                                <input type="text" id="country" placeholder="စာစစ်ဌာန" class="form-control">
                                            </div>
                                        </div>
                                        <br>
                                        <!--mine end-->
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-12" style="padding-bottom: 20px;">
                                                <p class="subtitle" id="part1title"><span style="color: darkcyan;">၂။ ဖြေဆိုခဲ့သောစာမေးပွဲများ</span></p>
                                            </div>
                                            <div class="col-lg-2 col-md-4 col-sm-6 col-12 text-left" style="padding-bottom: 20px;">
                                                <div class="btn btn-info" id="addpassedexambut">
                                                    Add New <i class='fa fa-plus'></i>
                                                </div>
                                            </div>
                                            <div class="card" id="part2">
                                                <div class="row card-body" id="addpassedexamform">
                                                    <div class="col-md-4">
                                                        <label>စာမေးပွဲ</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>အဓိကဘာသာ</label>
                                                        <select class="custom-select">
                                                            <option>CST</option>
                                                            <option>CS</option>
                                                            <option>CT</option>
                                                            <option>SE</option>
                                                            <option>KE</option>
                                                            <option>BIS</option>
                                                            <option>HPC</option>
                                                            <option>ES</option>
                                                            <option>CN</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>ခုံအမှတ်</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>ခုနှစ်</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label>အောင်/ရှုံး</label>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input" name="providing" name="acproviding" id="cr7">
                                                                <label for="cr7" class="custom-control-label">အောင်</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input" name="providing" name="acproviding" id="cr8">
                                                                <label for="cr8" class="custom-control-label">ရှုံး</label>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row" style="padding-bottom: 30px;">
                                            <div class="col-lg-12">
                                                <p class="subtitle" id="part1title" style="padding-bottom: 25px;"><span style="color: darkcyan">၃။ကျောင်းနေရန်ထောက်အပံ့ပေးမည့်ပုဂ္ဂိုလ်</span></p>
                                            </div>

                                            <div class="col-lg-2">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="cr10" name="provider">
                                                    <label for="cr10" class="custom-control-label">အဘ</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="cr11" name="provider">
                                                    <label for="cr11" class="custom-control-label">အမိ</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="cr12" name="provider">
                                                    <label for="cr12" class="custom-control-label">အခြား</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">အမည်</label>
                                            <input type="text" id="country" placeholder="အမည်" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">ဆွေမျိုးတော်စပ်ပုံ</label>
                                            <input type="text" id="country" placeholder="ဆွေမျိုးတော်စပ်ပုံ" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">အလုပ်အကိုင်</label>
                                            <input type="text" id="country" placeholder="အလုပ်အကိုင်" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">ဖုန်းနံပါတ်</label>
                                            <input type="text" id="country" placeholder="ဖုန်းနံပါတ်" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">ဆက်သွယ်ရန်လိပ်စာ</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>

                                        <hr>
                                        <div class="row" style="padding-bottom: 25px;">
                                            <div class="col-lg-12" style="padding-bottom: 20px;">
                                                <p class="subtitle" id="part1title"><span style="color: darkcyan">၄။ ပညာသင်ထောက်ပံ့ကြေးပေးရန် မေတ္တာရပ်ခံခြင်း -</span></p>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="providing" name="acproviding" id="cr13">
                                                    <label for="cr13" class="custom-control-label">ပြု</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" name="providing" name="acproviding" id="cr14">
                                                    <label for="cr14" class="custom-control-label">မပြု</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-footer">
                                            <button class="btn btn-primary guardian-prev">
                                                <i class="fa fa-angle-double-left"></i> Previous
                                            </button>
                                            <button class="btn btn-primary guardian-next">
                                                <i class="fa fa-angle-double-right"></i> Next
                                            </button>
                                        </div>
                                    <hr>
                                    </div>    <!-- end guardian -->
                                    <div class="submit-last"> <!-- start submit last -->

                                        <p   style="padding-bottom: 25px;">မှတ်ပုံတင်မည်</p>
                                        <p class="row" style="padding-left: 15px;padding-bottom: 30px;">
                                            သို့
                                        </p>
                                        <p class="row let1"  style="padding-left: 25px;">
                                            ပါမောက္ခချုပ်<br>
                                            သတင်းအချက်အလက်နည်းပညာတက္ကသိုလ်
                                        </p>
                                        <p class="row let2"  style="padding-left: 25px;">
                                            <div class="text-right">
                                                ရက်စွဲ၊
                                                <input type="date" name="date1">
                                            </div>
                                        </p>
                                        <p  style="padding-left: 15px;">
                                            အကြောင်းအရာ။    &nbsp;&nbsp;။သတင်းအချက်အလက်နည်းပညာတက္ကသိုလ်တွင် ပထမနှစ်သင်တန်း တက်ရောက်ခွင့် လျှောက်ထားခြင်း။
                                        </p>
                                        <p class="row mgleft"  style="padding-left: 25px;">
                                            ကျွန်တော်/ကျွန်မ ---- သည် --- ခုနှစ်၊ မတ်လ အတွင်း ကျင်းပခဲ့သော တက္ကသိုလ်ဝင်တန်းစာမေးပွဲကို ခုံအမှတ် ---ဖြင့် ဖြေဆိုအောင်မြင်ပြီး သတင်းအချက်အလက်နည်းပညာတက္ကသိုလ်သို့ ဝင်ခွင့်အမှတ်စဉ်(---)ဖြင့် ပထမနှစ်သင်တန်းသို့ ဝင်ရောက်ခွင့်ရသူဖြစ်ပါသည်။
                                        </p>
                                        <p class="row"  style="padding-left: 25px;">
                                            ၂၀၁၈-၂၀၁၉ ပညာသင်နှစ်အတွက် သတင်းအချက်အလက်နည်းပညာတက္ကသိုလ်တွင် ဖွင့်လှစ်မည့် ပထမနှစ်သင်တန်းသို့ တက်
                                            ရောက်ခွင့်ပြုပါရန် လျှောက်ထားအပ်ပါသည်။
                                        </p>
                                        <p class="row"  style="padding-left: 25px;padding-bottom: 30px;">
                                            သတင်းအချက်အလက်နည်းပညာတက္ကသိုလ်တွင် ပညာသင်ကြားနေစဉ်ကာလအတွင်း တက္ကသိုလ်မှသတ်မှတ်ထားသည့် အောက်ဖော်ပြပါ အချက်အလက်များကို သိရှိပြီးကြောင်းနှင့် လိုက်နာကျင့်သုံးမည်ဖြစ်ကြောင်းဝန်ခံလက်မှတ် ရေးထိုးပါသည်-
                                        </p>
                                        <p class="row"  style="padding-left: 45px;">
                                            <ul style="list-style-type: none;" >
                                                <li style="padding-left: 10px;">&diams; B.C.Sc/B.C.Tech သင်တန်းမှာ(၅)နှစ်သင်တန်းဖြစ်ပါသည်။</li>
                                                <li style="padding-left: 10px;">&diams; သင်တန်းကြေးမှာ တစ်လလျှင်(၅၀၀ဝိ/-)နှုန်ဲးဖြစ်ပါသည်။</li>
                                                <li style="padding-left: 10px;">&diams; မိမိအစီအစဉ််ဖြင့် နေထိုင်စားသောက်ရမည်ဖြစ်ပါသည်။</li>
                                                <li style="padding-left: 10px;">&diams; ကျောင်းဆောင်လျှောက်ထားနေထိုင်ခွင့် ရရှိသူများသည် အဆောင်လခများကို မှန်မှန်ပေးသွင်းရန်နှင့် အဆောင်မှ ချမှတ်ထားသော စည်းကမ်းများကို လိုက်နာရပါမည်။</li>
                                                <li style="padding-left: 10px;">&diams; နေ့စဉ်နံနက် ၈း၃၀ နာရီတွင် ကျောင်းဝင်းတံခါးပိတ်မည်ဖြစ်ပါသည်။</li>
                                                <li style="padding-left: 10px;">&diams; ကျောင်းသား၊ ကျောင်းသူကောင်းတစ်ယောက်ပီသစွာ တက္ကသိုလ်/ကောလိပ်က ချမှတ်မည့် စည်းမျဉ်း၊စည်းကမ်းများနှင့်အညီ လိုက်နာကျင့်သုံးနေထိုင်ပါမည်။</li>
                                                <li style="padding-left: 10px;">&diams; မသမာသောနည်းလမ်းဖြင့် စာမေးပွဲဖြေဆိုခြင်းတွေ့ရှိပါက ကျောင်းမှရာသက်ပန်ထုတ်ပယ်ခြင်းခံရမည်ကို သိရှိပါသည်။</li>
                                                <li style="padding-left: 10px;">&diams; သတင်းအချက်အလက်နည်းပညာတက္ကသိုလ်တွင် ဖွင့်လှစ်သည့် မည်သည့်သင်တန်းမဆို နောက်ဆက်တွဲ စာမေးပွဲကျင်းပပေးမည်မဟုတ်ပါ။</li>
                                                <li style="padding-left: 10px;">&diams; ကျောင်းမှထုတ်ပြန်ထားသော အောက်ဖော်ပြပါ စည်းကမ်းချက်များကို ဖတ်ရှု့ပြီးလိုက်နာမည်ဟုကတိပြုပါသည်။
                                                    <ul style="list-style-type: none;">
                                                        <li style="padding-left: 10px;">&bull; </li>
                                                        <li style="padding-left: 10px;">&bull; </li>
                                                        <li style="padding-left: 10px;">&bull; </li>
                                                        <li style="padding-left: 10px;">&bull; </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </p>
                                        <p class="row"  style="padding-left: 35px;padding-top: 30px;">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="agreelaw">
                                                <label for="agreelaw" class="custom-control-label">လိုက်နာဆောင်ရွက်မည်</label>
                                            </div>
                                        </p>
                                      <!--   <p class="row text-center"  style="padding-left: 25px;padding-top: 25px;">
                                            <button class="btn btn-primary" id="agreebut" disabled='true'>ရှေ့ဆက်ရန်</button>
                                        </p> -->
                                        <hr>
                                        <div class="col-lg-12" style="padding-bottom: 25px;">
                                            <p class="subtitle" id="part1title"><span style="color: darkcyan">ကိုယ်တိုင်ဝန်ခံချက်</span></p>
                                        </div>

                                        <div class="row" style="padding-left: 45px;padding-bottom: 25px;">
                                            <ul class="col-lg-12" id="admissionrule" style="list-style-type: none;">
                                                <li style="padding-left: 10px;">&diams; အထက်ဖော်ပြပါအချက်အားလုံးမှန်ကန်ပါသည်။</li>
                                                <li style="padding-left: 10px;">&diams; တက္ကသိုလ် ဆက်လက်ပညာသင်ခွင့်တောင်းသည်ကိုမိဘ(သို့မဟုတ်) အုပ်ထိန်းသူက သဘောတူပြီးဖြစ်ပါသည်။</li>
                                                <li style="padding-left: 10px;">&diams; ကျောင်းလခများမှန်မှန်ပေးရန် မိဘ(သို့မဟုတ်) အုပ်ထိန်းသူက သဘောတူပြီးဖြစ်ပါသည်။</li>
                                                <li style="padding-left: 10px;">&diams; တက္ကသိုလ်ကျောင်းသားကောင်းတစ်ယောက်ပီသစွာ တက္ကသိုလ်/ကောလိပ်က ချမှတ်သည့် စည်းမျဉ်း၊စည်းကမ်းများနှင့်အညီ လိုက်နာကျင့်သုံးနေထိုင်ပါမည်။</li>
                                            </ul>
                                        </div>
                                                    <!--dont touch-->
                                        <!-- </div> -->
                                        <div class="card-footer">
                                                    <button class="btn btn-primary submit-last-prev">
                                                        <i class="fa fa-angle-double-left"></i>&nbsp; Previous
                                                    </button>
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="fa fa-save"></i>&nbsp; Submit
                                                    </button>
                                                    <button type="reset" class="btn btn-danger">
                                                        <i class="fa fa-remove"></i>&nbsp; Reset
                                                    </button>
                                        </div>
                                    </div>           <!-- end submit-last -->

                                    <!-- </form> -->
                                <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/perfect-scrollbar.js"></script>
    <script src="js/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

    <script type="text/javascript">

        $('.parent-data').hide();
        $('.student-data').show();
        $('.guardian').hide();
        $('.submit-last').hide();


        $('.student-next').click(function(){
            $('.parent-data').show();
            $('.student-data').hide();
            $('.guardian').hide();
            $('.submit-last').hide();
        });


        $('.parent-next').click(function(){
            $('.parent-data').hide();
            $('.student-data').hide();
            $('.guardian').show();
            $('.submit-last').hide();
        });

        $('.parent-prev').click(function(){
            $('.parent-data').hide();
            $('.student-data').show();
            $('.guardian').hide();
            $('.submit-last').hide();
        });

        $('.guardian-next').click(function(){
            $('.parent-data').hide();
            $('.student-data').hide();
            $('.guardian').hide();
            $('.submit-last').show();
        });

        $('.guardian-prev').click(function(){
            $('.parent-data').show();
            $('.student-data').hide();
            $('.guardian').hide();
            $('.submit-last').hide();
        });

        $('.submit-last-prev').click(function(){
            $('.parent-data').hide();
            $('.student-data').hide();
            $('.guardian').show();
            $('.submit-last').hide();
        });

    </script>
</body>
@endsection
