@foreach ($results as $item)
    @foreach ($item as $value)
        <!DOCTYPE html>
        <html>
            <head>
                <title>प्रवेश पत्र | नागरिक लगानी कोष</title>
                <link rel="stylesheet" href="{{public_path('adminAssets/assets/css/bootstrap/css/bootstrap.min.css')}}">

                <style  type="text/css">
                    .sanchaya_admit_card {
                        padding: 10px 30px;
                        height: 1308px;
                        /* border: 1px solid; */
                    }

                    .sanchaya_admit_card .top_header {
                        overflow: hidden;
                        margin-bottom: 15px;
                    }

                    .sanchaya_admit_card .top_header .card_logo {
                        width: 25%;
                        margin: 0px auto;
                        float: left;
                    }

                    .sanchaya_admit_card .top_header .card_logo img {
                        width: 80px;
                    }

                    .sanchaya_admit_card .top_header .head_txt {
                        width: 50%;
                        float: left;
                        text-align: center;
                        /* margin-top: 15px; */
                    }

                    .sanchaya_admit_card .top_header .head_txt h4 {
                        font-size: 30px;
                        color: #000;
                        -webkit-text-stroke: 1px;
                        margin-top: 0px;
                        margin-bottom: 6px;
                    }

                    .sanchaya_admit_card .top_header .head_txt h5 {
                        /* font-size: 30px; */
                        color: #000;
                        -webkit-text-stroke: 1px;
                        margin-top: 0px;
                        margin-bottom: 6px;
                    }

                    .sanchaya_admit_card .top_header .head_txt h4:nth-last-child(1) {
                        margin-bottom: 0px;
                    }

                    .sanchaya_admit_card .top_header .rt_img_wrapper {
                        float: left !important;
                        width: 25%;
                        position: relative;
                    }

                    .sanchaya_admit_card .top_header .rt_img_wrapper .signature {
                        position: absolute;
                        left: 0px;
                        bottom: 0px;
                        width: 50%;
                    }

                    .sanchaya_admit_card .top_header .rt_img_wrapper .signature h5 {
                        /* border-bottom: 1px dotted #000; */
                        padding-top: 30px;
                    }

                    .sanchaya_admit_card .top_header .rt_img_wrapper .signature img {
                        width: 120px;
                        position: relative;
                        top: -50px;
                        left: 00%;
                        border: 1px solid #ddd;
                        min-height: 30px;
                    }
                    .sanchaya_admit_card .top_header .rt_img_wrapper .signature img:hover + #editSignature {
                        display: block;
                    }

                    #editSignature {
                        position: absolute;
                        top: -15%;
                        left: 20%;
                        /* display: none; */
                    }

                    .sanchaya_admit_card .top_header .rt_img_wrapper .user_img {
                        overflow: hidden;
                        float: right;
                        width: 50%;
                        padding-left: 30px;
                    }

                    .sanchaya_admit_card .top_header .rt_img_wrapper .user_img img {
                        float: right;
                        width: 100px;
                        border: 1px solid #ddd;
                        height: 100px;
                        position: relative;
                    }
                    .sanchaya_admit_card .top_header .rt_img_wrapper .user_img img:hover + #editPhotograph{
                        display: block;
                        
                        cursor: pointer;
                    }

                    #editPhotograph {
                        position: absolute;
                        top: 35%;
                        left: 79%;
                        /* display: none;display: none; */
                        cursor: pointer;
                        }

                    .sanchaya_admit_card .card_content_wrapper .card_flx {
                        overflow: hidden;
                    }

                    .sanchaya_admit_card .card_content_wrapper .card_flx .lt_ct {
                        width: 48%;
                        float: left;
                    }

                    .sanchaya_admit_card .card_content_wrapper .card_flx .rt_ct {
                        width: 48%;
                        float: right;
                    }

                    .sanchaya_admit_card .ct_flx {
                        overflow: hidden;
                    }

                    .sanchaya_admit_card .ct_flx .citizenship_card {
                        margin-top: 0px;
                        margin-bottom: 15px;
                        width: 48%;
                        float: left;
                        border: 1px solid #ddd;
                        position: relative;
                    }

                    .sanchaya_admit_card .ct_flx .citizenship_card img {
                        width: 100%;
                        float: right;
                        -o-object-fit: contain;
                        object-fit: contain;
                        height: 200px;
                    }
                    .sanchaya_admit_card .ct_flx .citizenship_card img:hover +  .editCitizenship{
                        display: block;
                        
                    }

                    .editCitizenship {
                        position: absolute;
                        top: 39%;
                        left: 46%;
                        /* display: none; */
                    }

                    .sanchaya_admit_card .ct_flx .lt_float img {
                        float: left;
                    }

                    .sanchaya_admit_card .ct_flx .rt_float {
                        float: right !important;
                    }

                    .sanchaya_admit_card .official_use .official_box h4 {
                        margin-top: 30px;
                        font-size: 16px;
                        font-weight: 500;
                        display: inline-block;
                        margin: 0px;
                        color: #000;
                    }

                    .sanchaya_admit_card .official_use .official_box p {
                        margin-bottom: 8px;
                        font-size: 16px;
                        color: #000;
                    }

                    .sanchaya_admit_card .official_use .off_details {
                        width: 100%;
                        overflow: hidden;
                        margin-top: 10px;
                    }

                    .sanchaya_admit_card .official_use .off_details .lt_dt h4 {
                        font-size: 16px;
                        font-weight: 500;
                        margin: 0px;
                        color: #000;
                    }

                    .sanchaya_admit_card .official_use .off_details .lt_dt h4 span {
                        color: #000;
                        font-weight: 600;
                        font-weight: 14px;
                    }

                    .sanchaya_admit_card .official_use .off_details .rt_dt {
                        padding: 5px 0px;
                        text-align: right;
                        margin-top: 15px;
                    }

                    .sanchaya_admit_card .official_use .off_details .rt_dt .txt_cntr {
                        display: inline-block;
                        text-align: left;
                    }

                    .sanchaya_admit_card .official_use .off_details .rt_dt .txt_cntr h5 {
                        font-size: 16px;
                        font-weight: 500;
                        text-align: left;
                        margin-top: 5px;
                        margin-bottom: 5px;
                        color: #000;
                    }

                    .sanchaya_admit_card .rules_list h4 {
                        font-size: 16px;
                        font-weight: 600;
                        margin-bottom: 8px;
                        display: inline-block;
                        border-bottom: 2px solid #000;
                    }

                    .sanchaya_admit_card .rules_list ul {
                        padding-left: 0px;
                    }

                    .sanchaya_admit_card .rules_list ul li {
                        font-size: 16px;
                        list-style: none;
                        overflow: hidden;
                        width: 100%;
                        font-weight: 500;
                        color: #000;
                        line-height: 20px;
                    }

                    .sanchaya_admit_card .rules_list ul li .numbering {
                        padding-right: 15px;
                        float: left;
                    }

                    .sanchaya_admit_card .rules_list ul li .list_text {
                        width: 90%;
                        float: left;
                    }

                    .sanchaya_admit_card table th {}

                    .sanchaya_admit_card table td,
                    th {
                        padding: 0px 15px !important;
                        font-size: 16px;
                        height: 30px;
                        vertical-align: middle !important;
                    }

                    .sanchaya_admit_card .signature_official img {
                        width: 100%;
                        height: 80px;
                        object-fit: cover;
                    
                    
                    }
                    
                    /*# sourceMappingURL=main.css.map */
                    @font-face {
                        font-family: 'Mukta';
                        src: url(data:font/truetype;charset=utf-8;base64,{{base64_encode(file_get_contents(public_path('fonts/Mukta-Regular.ttf'))) }}) format('truetype');
                        font-weight:normal;
                    }

                    body {
                        font-family: Mukta !important;
                    }
                    
                
                    img {
                        display: block;
                        max-width: 100%;
                    }
                    .preview {
                        overflow: hidden;
                        width: 200px;
                        height: 200px;
                        border: 1px solid red;
                        position:relative;
                    }
                    .preview img {
                        position:absolute;
                        z-index:1;
                    }
                    #textcanvas{
                        position:relative;
                        z-index:20;
                    }
                    #side {
                        padding: 10px;
                    }
                    .modal-lg{
                        max-width: 1000px !important;
                    }
                    .btn-primary{
                        background-color: #1472d0 !important;
                    }
                    
                </style>
            </head>
            <body>
               
                <page size="A4">
                    <section class="sanchaya_admit_card">
                        <div class="top_header">
                            <a href="{{ route('applicantadmitcard') }}" class="btn btn-danger"> <i class="fa fa-file-pdf" aria-hidden="true"></i> Print to Pdf</a><br>

                            <button class="btn btn-warning btn-sm printAdmitCardBtn" data-degid="{{ $value['designation'] }}">प्रवेश पत्र</button>
                           
                            <div class="card_logo">
                                <img src="{{ public_path('adminAssets/assets/images/log2.png') }}">
                            </div>
                            <div class="head_txt">
                                <h4>नागरिक लगानी कोष</h4>
                                <h5>प्रवेश - पत्र</h5>
                            </div>
                            <div class="rt_img_wrapper">
                                <div class="signature">
                                    @if(!empty($value['cropped_signature']))
                                        <img class="" id="signature" alt="Applicant's Signature" src="{{public_path('uploads/cropped/signature/'.@$value['cropped_signature'])}}">
                                        <button hidden class="btn btn-danger btn-sm undoEdit" data-editid="signature" title="Load Original Image"  type="button" ><i class="fa fa-undo"></i> </button>
                                    @else
                                        <img class="" id="signature" alt="Applicant's Signature" src="{{public_path('uploads/document/signature/'.@$value['signature'])}}">
                                    @endif
                                    <button hidden class="btn btn-danger btn-sm" id="editSignature" data-id="signature" title="Edit Signature" type="button" ><i class="fa fa-edit"></i> </button>
                                </div>
                                <div class="user_img">
                                    @if(!empty($value['cropped_photograph']))
                                        <img alt="Applicant's Photo" id="photograph" src="{{public_path('uploads/cropped/photograph/'.@$value['cropped_photograph'])}}">
                                        <button hidden class="btn btn-danger btn-sm undoEdit" data-editid="photograph" title="Load Original Image"  type="button" ><i class="fa fa-undo"></i> </button>
                                    @else
                                        <img alt="Applicant's Photo" id="photograph" src="{{public_path('uploads/document/photography/'.@$value['photography'])}}" >
                                    @endif
                                   <button hidden class="btn btn-danger btn-sm" id="editPhotograph" data-id="photograph" title="Edit Photograph" type="button" ><i class="fa fa-edit"></i> </button>
                                </div>
                                <div class="resized"></div>
                            </div>
                        </div>

                        <div class="card_content_wrapper">
                            <div class="card_flx">
                                <div class="lt_ct">
                                    <table class="table main_table table-bordered">
                                        <b class="text-danger">मास्टर आई.डि. : {{@$value['userid']}}</b>
                                        <tbody class="t_body">
                                            <tr>
                                                <th style="width:42%;"> उम्मेदवारको नाम थर :</th>
                                                <td>{{@$value['fullname']}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width:35%;">(क) &nbsp;सेवा : </td>
                                                <td>{{@$value['servicegroupname']}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width:35%;">(ख) &nbsp;समूह :</td>
                                                <td>{{@$value['jobcategory']}} </td>
                                            </tr>
                                            <tr>
                                                <td style="width:35%;">(ग) &nbsp; उपसमूहः</td>
                                                <td>{{@$value['jobcategory']}} </td>
                                            </tr>
                                            <tr>
                                                <td style="width:35%;">(घ) &nbsp;तह :</td>
                                                <td>{{@$value['labelname']}} </td>
                                            </tr>
                                            <tr>
                                                <td style="width:35%;">(ङ) &nbsp; पद : </td>
                                                <td>{{@$value['designation']}}</td>
                                            </tr>
                                            <tr>
                                                <td style="width:35%;">(च) &nbsp;परीक्षा केन्द्र:</td>
                                                <td>{{@$value['examcenter']}} </td>
                                            </tr>
                                            <tr>
                                                <td style="width:35%;">(च) &nbsp; रोल नं.</td>
                                                <td>{{@$value['rollnumber']}} </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="rt_ct">
                                    <table class="table main_table table-bordered">
                                        <tbody class="t_body">
                                            <tr>
                                                <th scope="col">विज्ञापन नं.
                                                </th>
                                                <th scope="col" style="text-align:center;">खुला/समावेशी समूह
                                                </th>
                                            </tr>
                                            @foreach($value['job'] as $key=>$datas)
                                                @foreach($datas as $keys=>$data)
                                                    <tr>
                                                        <td style="width:35%;">{{@$keys}}</td>
                                                        <td>{{@$data}}</td>
                                                    </tr>
                                                @endforeach
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="ct_flx">
                            @if(!empty($value['citizenshipfront']))
                                <div class="citizenship_card lt_float">
                                    @if(!empty($value['cropped_citizenshipfront']))
                                        <img class="" id="citizenshipfront" alt="Citizenship Front" src="{{public_path('uploads/cropped/citizenshipfront/'.@$value['cropped_citizenshipfront'])}}">
                                        <button hidden class="btn btn-danger btn-sm undoEdit undoEditCitizenship" title="Load Original Image" data-editid="citizenshipfront" type="button" ><i class="fa fa-undo"></i> </button>
                                    @else
                                        <img class="" id="citizenshipfront" alt="Citizenship Front" src="{{public_path('uploads/document/citizenshipfront/'.@$value['citizenshipfront'])}}">
                                    @endif
                                    <button hidden class="btn btn-danger btn-sm editCitizenship" id="editCitizenshipFront" title="Edit Citizenship Front" data-id="citizenshipfront" type="button" ><i class="fa fa-edit"></i> </button>
                                </div>
                            @endif
                            @if(!empty($value['citizenshipback']))
                                <div class="citizenship_card rt_float">
                                    @if(!empty($value['cropped_citizenshipback']))
                                        <img class="" id="citizenshipback" alt="Citizenship Back" src="{{public_path('uploads/cropped/citizenshipback/'.@$value['cropped_citizenshipback'])}}">
                                        <button hidden class="btn btn-danger btn-sm undoEdit undoEditCitizenship"  title="Load Original Image" data-editid="citizenshipback" type="button" ><i class="fa fa-undo"></i> </button>
                                    @else
                                        <img class="" id="citizenshipback" alt="Citizenship Back" src="{{public_path('uploads/document/citizenshipback/'.@$value['citizenshipback'])}}">
                                    @endif
                                    <button hidden class="btn btn-danger btn-sm editCitizenship" id="editCitizenshipBack" title="Edit Citizenship Back" data-id="citizenshipback" type="button" ><i class="fa fa-edit"></i> </button>
                                </div>
                            @endif
                        </div>
                        <div class="official_use">
                            <div class="official_box">
                                <!-- <h4>कोषको कर्मचारीले भर्ने :</h4> -->
                                <p>
                                    यस कोषबाट लिइने उक्त पदको परीक्षामा तपाईलाई उल्लिखित केन्द्रबाट सम्मिलित हुन प्रवेश पत्र
                                    दिईएको छ । विज्ञापनमा तोकिएको शर्त नपुगेको ठहर भएमा जुनसुकै अवस्थामा पनि यो प्रवेश पत्र रद्द
                                    हुन सक्नेछ।
                                    
                                </p>
                            </div>
                            <div class="off_details">
                                <!-- <div class="lt_dt">
                                    <h4>परीक्षा केन्द्र&nbsp;: &nbsp;<span>काठमाडौं, ललितपुर</span></h4>
                                    <h4>रोल नम्बर &nbsp;: &nbsp;<span>००२३४५६७८९०२३</span></h4>
                                </div> -->
                                <div class="rt_dt">
                                    <div class="txt_cntr">
                                            <div class="signature_official">
                                                <img class=""
                                                    src="{{ public_path('adminAssets/assets/images/sign.png') }}">
                                            </div>
                                        <h5 style="font-weight: normal; margin-top: 0px; margin-bottom: 15px; line-height: 0px;">..........................................</h5>
                                        <h5>जारी गने अधिकृतको </h5>
                                        <h5>दस्तखत : </h5>
                                        <h5>नाम :  <span></span></h5>
                                        <h5>मिति : <span></span></h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="rules_list">
                            <h4>उम्मेदवारले पालना गर्नु पर्ने नियमहरू :</h4>
                            <ul class="list_items">
                                <li>
                                    <span class="numbering">१.</span>
                                    <span class="list_text"> परीक्षा दिन आउँदा अनिवार्य रूपमा
                                        प्रवेशपत्र र सक्कल नेपाली नागरिकताको प्रमाणपत्र समेत ल्याउनु पर्नेछ । प्रवेशपत्र विना परीक्षामा बस्न पाइने छैन ।
                                    </span>
                                </li>
                                <li>
                                    <span class="numbering">२.</span>
                                    <span class="list_text"> परीक्षा हलमा मोबाईल फोन, ल्यापटप, आइप्याड, ग्याजेट ल्याउन पाइने छैन ।
                                    </span>
                                </li>

                                <li>
                                    <span class="numbering">३.</span>
                                    <span class="list_text">लिखित परीक्षाको नतिजा प्रकाशित भएपछि अन्तर्वार्ता हुने दिनमा प्रवेशपत्र ल्याउनु पर्नेछ। </span>
                                </li>
                                <li>
                                    <span class="numbering">४.</span>
                                    <span class="list_text">परीक्षा शुरु हुने ३० मिनेट अगावै घण्टीद्वारा सूचना गरेपछि परीक्षा हलमा प्रवेश गर्न दिईने छ। वस्तुगत परीक्षा शुरु भएको १५
                                        मिनेट पछि र विषयगत परीक्षा शुरु भएको आधा घण्टा पछि आउने र वस्तुगत तथा विषयगत दुवै परीक्षा सँगै हुनेमा २० मिनेट पछि आउने उम्मेदवारले परीक्षामा बस्न पाउने छैन।
                                    </span>
                                </li>
                                <li>
                                    <span class="numbering">५.</span>
                                    <span class="list_text">परीक्षा हलमा प्रवेश गर्न पाउने समय
                                        अवधि (बुँदा नं. ४ मा उल्लेख गरिएको) बितेको १० मिनेट पछाडि मात्र उम्मेदवारलाई परीक्षा हल
                                        बाहिर जाने अनुमति दिइनेछ।
                                    </span>
                                </li>
                                <li>
                                    <span class="numbering">६.</span>
                                    <span class="list_text">परीक्षा हलमा प्रवेश गरेपछि किताब,
                                        कापी, कागज, लगायत अन्य यस्तै प्रकृतिका वस्तु आफू साथ राख्नु हुँदैन। उम्मेदवारले आपसमा
                                        कुराकानी र संकेत गर्नु हुँदैन। 
                                    </span>
                                </li>
                                <li>
                                    <span class="numbering">७.</span>
                                    <span class="list_text">परीक्षा हलमा उम्मेदवारले परीक्षाको
                                        मर्यादा विपरीत कुनै काम गरेमा केन्द्राध्यक्षले परीक्षा हलबाट निष्काशन गरी तुरुन्त कानून
                                        बमोजिमको कारबाही गर्नेछ। त्यसरी निष्काशन गरिएको उम्मेदवारको सो विज्ञापनको परीक्षा स्वतः
                                        रद्द भएको मानिने छ।
                                    </span>
                                </li>
                                <li>
                                    <span class="numbering">८.</span>
                                    <span class="list_text">बिरामी भएको उम्मेदवारले परीक्षा हलमा
                                        प्रवेश गरी परीक्षा दिने क्रममा निजलाई केही भएमा कोष जवाफदेही हुने छैन।
                                    </span>
                                </li>
                                <li>
                                    <span class="numbering">९.</span>
                                    <span class="list_text">उम्मेदवारले परीक्षा दिएको दिनमा हाजिर अनिवार्य गर्नु पर्नेछ। </span>
                                </li>
                                <li>
                                    <span class="numbering">१०.</span>
                                    <span class="list_text">कोषको सूचनाद्वारा निर्धारण गरेको कार्यक्रम अनुसार परीक्षा सञ्चालन हुनेछ। </span>
                                </li>
                                <li>
                                    <span class="numbering">११.</span>
                                    <span class="list_text">उम्मेदवारले वस्तुगत परीक्षामा
                                        आफूलाई प्राप्त प्रश्नको “की” उत्तरपुस्तिकामा अनिवार्य रुपले लेख्नुपर्नेछ। नलेखेमा
                                        उत्तरपुस्तिका स्वतः रद्द हुनेछ।
                                    </span>
                                </li>
                                <li>
                                    <span class="numbering">१२.</span>
                                    <span class="list_text">ल्याकत (आइ.क्यू.) परीक्षामा क्यालकुलेटर प्रयोग गर्न पाइने छैन।  </span>
                                </li>
                                <li>
                                    <span class="numbering">१३.</span>
                                    <span class="list_text">
                                        कुनै उम्मेदवारले प्रश्न पत्रमा रहेको अस्पष्टताको सम्बन्धमा सोध्नु पर्दा परीक्षामा सम्मिलित
                                        अन्य उम्मेदवारहरूलाई वाधा नपर्ने गरी कोषबाट खटिएका निरीक्षकलाई सोध्नु पर्नेछ।
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <input  class="form-control" id="width" type="hidden">
                        <input  class="form-control" id="height" type="hidden">
                        <input  class="form-control" id="x" type="hidden">
                        <input  class="form-control" id="y" type="hidden">
                    </section>
                </page>
                <div class="modal hide fade" id="imageCropModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                           
                        </div>
                    </div>
                </div>
                
                <script type="text/javascript">
                    $(document).ready(function(){
                        function getCropModal(){
                            var url = "{{route('getCropModal')}}";
                            return $.ajax({
                                    url : url, 
                                    type : 'GET',
                                    async:false, 
                                    success: function (response) {
                                        $('#imageCropModal .modal-body').html(response);
                                        imageCropModal.modal('show');
                                    }
                                });
                        }
                        var imageCropModal = $('#imageCropModal');
                        var cropper;
                        var image;
                        var editid = '';
                        $(document).ready(function(){
                            $('#editPhotograph').on('click', function(e){
                                e.preventDefault();
                                getCropModal();
                                image = document.getElementById('image');
                                image.src =  $('#photograph').attr('src');
                                editid = $('#photograph').attr('id');
                                imageCropModal.modal('show');
                            });

                            $('#editSignature').on('click', function(e){
                                e.preventDefault();
                                getCropModal();
                                image = document.getElementById('image');
                                image.src =  $('#signature').attr('src');
                                editid = $('#signature').attr('id');
                                imageCropModal.modal('show');
                            });

                            $('#editCitizenshipFront').on('click', function(e){
                                e.preventDefault();
                                getCropModal();
                                image = document.getElementById('image');
                                image.src =  $('#citizenshipfront').attr('src');
                                editid = $('#citizenshipfront').attr('id');
                                imageCropModal.modal('show');
                            });

                            $('#editCitizenshipBack').on('click', function(e){
                                e.preventDefault();
                                getCropModal();
                                image = document.getElementById('image');
                                image.src =  $('#citizenshipback').attr('src');
                                editid = $('#citizenshipback').attr('id');
                                imageCropModal.modal('show');
                            });

                        });
                        
                        
                        // on click update-button
                        $("#updateImage").click(function(){
                            var canvas = getCroppedCanvas();
                            const ctx = canvas.getContext("2d");
                            canvas.toBlob(function(blob) {
                                url = URL.createObjectURL(blob);
                                var reader = new FileReader();
                                reader.readAsDataURL(blob);
                                reader.onloadend = function() {
                                    var base64data = reader.result;
                                    var url =  "{{ route('updateImage') }}";
                                    var data =  {
                                        'editid': editid,
                                        'image': base64data,
                                    };
                                    $.post(url, data, function (response) {
                                        var result = JSON.parse(response);
                                        if (result.type == 'success') {
                                            imageCropModal.modal('hide');
                                            $.notify(result.message, 'success');
                                        } else {
                                            $.notify(result.message, 'error');
                                        }
                                    });
                                }
                            });
                        });

                        $(document).off('click', '.undoEdit');
                        $(document).on('click', '.undoEdit', function() {
                            var editid = $(this).data('editid');
                            var undoEdit = true;
                            var url = "{{route('updateImage')}}";
                            var infoData = {
                                editid: editid,
                                undoEdit:undoEdit
                            }
                            swal({
                                    title: "के तपाई यसलाई हटाएर पुरानै फाइल ल्याउन चाहानुहुन्छ ? ",
                                    text: "तपाइँ यो फाइल पुन: प्राप्त गर्न सक्नुहुने छैन |",
                                    type: "warning",
                                    showCancelButton: true,
                                    cancelButtonText: "होइन",
                                    confirmButtonClass: "btn-danger",
                                    confirmButtonText: "हो"
                                },
                                function() {
                                    $.post(url, infoData, function(response) {
                                        var result = JSON.parse(response);
                                        if (result.type == 'success') {
                                            $.notify(result.message, 'success');
                                            location.reload();
                                        } else {
                                            $.notify(result.message, 'error');
                                        }
                                    });
                                });
                        });
            
                        //show image-modal
                        imageCropModal.on('shown.bs.modal', function () {
                            cropper = new Cropper(image, {
                                viewMode: 3,
                                preview: '.preview',
                                rotatable: true,
                                crop(event) {
                                    document.getElementById("image-width").value = Math.round(event.detail.width);
                                    document.getElementById("image-height").value = Math.round(event.detail.height);
                                },
                            });
                            $('#rotate-right').click(function() {
                                cropper.rotate(45);
                            });
                            $('#rotate-left').click(function() {
                                cropper.rotate(-45);
                            });
                        }).on('hidden.bs.modal', function () {
                            cropper.destroy();
                            cropper = null;
                        });
            
                        //returns canvas
                        function getCroppedCanvas(){
                            return cropper.getCroppedCanvas({
                                width: $('#image-width').val(),
                                height: $('#image-width').val(),
                            });
                        }
                    });
                </script>

            </body>
        </html>
    @endforeach
@endforeach

