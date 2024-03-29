{{-- @php $pageno = 1; @endphp --}}
@foreach ($results as $value)
      <section class="sanchaya_admit_card">
            <div class="top_header">
                  <div class="card_logo">
                        <img src="{{ asset('adminAssets/assets/images/log_bk.png') }}">
                  </div>
                  <div class="head_txt">
                        <h4>नागरिक लगानी कोष</h4>
                        <h5>प्रवेश - पत्र</h5>
                  </div>
                  <div class="rt_img_wrapper">
                        <div class="signature">
                        @if(!empty($value['cropped_signature']))
                              {{-- <img class="" id="signature" alt="Applicant's Signature" src="{{asset('uploads/cropped/signature/'.@$value['cropped_signature'])}}"> --}}
                              <img src="{{ asset('adminAssets/assets/images/log2.png') }}">
                              {{-- {{@$value['cropped_signature']}} --}}
                        @else
                              {{-- <img class="" id="signature" alt="Applicant's Signature" src="{{asset('uploads/document/signature/'.@$value['signature'])}}"> --}}
                              <img src="{{ asset('adminAssets/assets/images/log2.png') }}">
                              {{-- {{@$value['signature']}} --}}
                        @endif

                        </div>
                        <div class="user_img">
                        @if(!empty($value['cropped_photograph']))
                              {{-- <img alt="Applicant's Photo" id="photograph" src="{{asset('uploads/cropped/photograph/'.@$value['cropped_photograph'])}}"> --}}
                              <img src="{{ asset('adminAssets/assets/images/log2.png') }}">
                              {{-- {{@$value['cropped_photograph']}} --}}
                        @else
                              {{-- <img alt="Applicant's Photo" id="photograph" src="{{asset('uploads/document/photography/'.@$value['photography'])}}" > --}}
                              <img src="{{ asset('adminAssets/assets/images/log2.png') }}">
                              {{-- {{@$value['photography']}} --}}
                        @endif
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
                                    <th style="width:40%;"> उम्मेदवारको नाम थर :</th>
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
                                    @if(!empty($value['job']))
                                    @foreach($value['job'] as $key=>$datas)
                                          @foreach($datas as $keys=>$data)
                                                <tr>
                                                <td style="width:35%;">{{@$keys}}</td>
                                                <td>{{@$data}}</td>
                                                </tr>
                                          @endforeach
                                    @endforeach
                                    @endif
                              </tbody>
                        </table>
                        </div>
                  </div>
            </div>

            <div class="ct_flx">
                  @if(!empty($value['citizenshipfront']))
                        <div class="citizenship_card lt_float">
                        @if(!empty($value['cropped_citizenshipfront']))
                              {{-- <img class="" id="citizenshipfront" alt="Citizenship Front" src="{{asset('uploads/cropped/citizenshipfront/'.@$value['cropped_citizenshipfront'])}}"> --}}
                              <img src="{{ asset('adminAssets/assets/images/log2.png') }}">
                              {{-- {{@$value['cropped_citizenshipfront']}} --}}
                        @else
                              {{-- <img class="" id="citizenshipfront" alt="Citizenship Front" src="{{asset('uploads/document/citizenshipfront/'.@$value['citizenshipfront'])}}"> --}}
                              <img src="{{ asset('adminAssets/assets/images/log2.png') }}">
                              {{-- {{@$value['citizenshipfront']}} --}}
                        @endif
                        </div>
                  @endif
                  @if(!empty($value['citizenshipback']))
                        <div class="citizenship_card rt_float">
                        @if(!empty($value['cropped_citizenshipback']))
                              {{-- <img class="" id="citizenshipback" alt="Citizenship Back" src="{{asset('uploads/cropped/citizenshipback/'.@$value['cropped_citizenshipback'])}}"> --}}
                              <img src="{{ asset('adminAssets/assets/images/log2.png') }}">
                              {{-- {{@$value['cropped_citizenshipback']}} --}}
                        @else
                              {{-- <img class="" id="citizenshipback" alt="Citizenship Back" src="{{asset('uploads/document/citizenshipback/'.@$value['citizenshipback'])}}"> --}}
                              <img src="{{ asset('adminAssets/assets/images/log2.png') }}">
                              {{-- {{@$value['citizenshipback']}} --}}
                        @endif
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
                                    @if(!empty($value['authorizedSignatureSrc']))
                                          <img class="" src="{{ $value['authorizedSignatureSrc'] }}">
                                    @endif
                              </div>
                              <h5 style="font-weight: normal; margin-top: 0px; margin-bottom: 15px; line-height: 0px;">..........................................</h5>
                              <h5>जारी गने अधिकृतको </h5>
                              <h5>दस्तखत : </h5>
                              <h5>नाम :  <span>{{ !empty($value['authorizedOfficer'])? $value['authorizedOfficer']: ''}}</span></h5>
                              <h5>मिति : <span>{{ !empty($value['signatureDate'])? $value['signatureDate']: ''}}</span></h5>
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
                  
            {{-- {{ 'Page Number: '.$pageno }} --}}
            {{-- @php  $pageno++; @endphp --}}
      </section>
@endforeach
