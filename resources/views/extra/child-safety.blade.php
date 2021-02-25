@extends('layouts.app')
@push('styles')
    <link rel="stylesheet" href="{{"app-assets/css/webgradients.css"}}" type="text/css"/>
    <style>
        .child-heading {

            font-size: 40px;
            line-height: 1.1;
            font-weight: 600;
            letter-spacing: 0em;
            font-family: "SF Pro Display", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
        }

        .child-subhead {
            font-size: 21px;
            line-height: 1.2381;
            font-weight: 400;
            letter-spacing: .016em;
            font-family: "SF Pro Display", "SF Pro Icons", "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            margin-top: 4px;
        }

        /*  .box {
              background: rgba(0,0,0,0.6);
              backdrop-filter: saturate(180%) blur(10px);
          }
          @supports (-webkit-backdrop-filter: none) or (backdrop-filter: none) {
              .box {
                  -webkit-backdrop-filter: blur(10px);
                  backdrop-filter: blur(10px);
              }
          }*/

    </style>
@endpush
@section('content')
    <section>
        <div class="container-fluid p-0">

            <div class="rounded-bottom happy_fisher"
                 style="min-height: 300px;/*background: url({{asset('app-assets/img/bg-img/child-safety-bg.jpg')}})  repeat-x;*/">
                <div class="container p-2">
                    <div class="rounded container m-0 py-5 pl-0 text-white text-capitalize">
                        <h5 class="child-heading" style="color: #0c1db8!important; font-weight: 100;">Child Safety at
                            Tneos</h5>
                    </div>
                </div>
            </div>

            <div class="container mb-3" style=" margin-top: -41px;">
                <div class="row">
                    <div class="col-12 bg-white  p-5 shadow text-justify" style="margin-top: -81px;">
                        <h6>#ChildSafetyFirst</h6>
                        <p class="lead">Creating safe learning environment for every child</p>
                        Click <a class="text-warning" href="https://tneos.com/child-safety">here</a> to read Tneos’s
                        Child Safety Policy
                        <p>At Tneos, we keep upgrading the online learning space for our students to ensure holistic
                            development through Innovative and new methods of learning.</p>
                        <p>Tneos, being the Leader of LIVE interactive online education in India & Overseas, always
                            realizes the importance of safety and security of its students while they systematically
                            adapt to the new environment of online education. Thus, the absolute priorities of Tneos
                            have been placed keeping in mind the best interest of its students of all ages.</p>
                        <p>Child Safety will always be our priority and to ensure, we provide a safe environment for
                            every child to learn, we have become India’s leading Edu-Tech company to adopt a ZERO
                            TOLERANCE towards unsavory practices like online bullying, defamation, stalking, abusive
                            language and any other action that makes a child uncomfortable while attending any Paid or
                            Free online session(s).</p>
                        <p>We have a competent Child Safety Team comprising of legal experts, counsellors and external
                            experts and works with the leadership. The mandate is to uphold the safety of children
                            online all the time.</p>
                        <p>The list of initiatives and steps we have taken towards making online learning a safe
                            environment are – </p>
                        <p><b>Safety Measures in Regular Classes of Tneos Courses:</b></p>
                        <ul class="px-3">
                            <li style="list-style: disc!important;">The Regular classes are closely monitored and
                                regulated by multiple 'Class Teachers' along with a Master Teacher in-charge.
                            </li>
                            <li style="list-style: disc!important;">The role of a Class Teacher is not limited to
                                solving pertinent doubts of students (LIVE) during class hours but also to moderate the
                                conversation on the chats. And any inappropriate behavior will lead to the student being
                                blocked by the teacher immediately.
                            </li>
                            <li style="list-style: disc!important;">The Regular Classes are integrated with automated
                                profanity filters to check inappropriate texts / pictures / recordings.
                            </li>
                            <li style="list-style: disc!important;">In case of any unwanted / unpleasant behavior by any
                                student during class hours towards another student/ or anyone concerned, the Class
                                Teachers and / or Master Teacher in charge will inform the Child Safety Team (CST) of
                                Tneos, who will send a warning (verbal / written) to the student and / or parents /
                                guardian of the student.
                            </li>
                            <li style="list-style: disc!important;">Keeping the best interest of the child, an
                                appropriate counselling session may be suggested for the child by the Child Safety team
                                of Tneos.
                            </li>
                        </ul>
                        <p class="my-2"><b>Safety measures in Free Live Master Classes:</b></p>
                        <ul class="px-3">
                            <li style="list-style: disc!important;">The Free LIVE Master Classes are integrated with
                                automated profanity filters to check inappropriate texts / pictures / recordings.
                            </li>
                            <li style="list-style: disc!important;">Further the chats during the sessions are closely
                                monitored and regulated by the moderator of the session.
                            </li>
                            <li style="list-style: disc!important;">The Regular Classes are integrated with automated
                                profanity filters to check inappropriate texts / pictures / recordings.
                            </li>
                        </ul>
                        <p class="my-2"><b>Further steps to ensure safety and positive learning environment:</b></p>
                        <p>Driven by our vision to create the best cohort in online education platforms for children, we
                            understand safety and wellbeing of every student as well as educator is an absolute
                            essential. In order to ensure a safe and healthy learning environment, Tneos has introduced
                            a set of strict ZERO Tolerance Policy, which every staff at Tneos/student/ their parents/
                            their guardians/ the educators will adhere to during and beyond class hours.</p>
                        <p class="my-2"><b>Please see the list of conduct prohibited in Tneos’s LIVE Sessions below:</b>
                        </p>
                        <ul class="px-3">
                            <li style="list-style: disc!important;">Disrupt the orderly conduct of classes in the form
                                of action ,speech or any other form.
                            </li>
                            <li style="list-style: disc!important;">Using loud or offensive language or displaying
                                temper during class hours.
                            </li>
                            <li style="list-style: disc!important;">Sending abusive messages or threats to any STUDENT/
                                others concerned within the Tneos community,
                                through any medium (including Social Media).
                            </li>
                            <li style="list-style: disc!important;">Defamatory, offensive or derogatory comments,
                                pictures, videos regarding Tneos or any of the pupils/parents/staff/governors at the
                                Tneos platform or on Facebook or other public/social sites.
                            </li>
                            <li style="list-style: disc!important;">Intimidating, harassing or discriminating any person
                                on the basis of their race, color, creed, national origin, religion, age, gender, sexual
                                orientation or disability in the form of action, speech or any other form.
                            </li>
                            <li style="list-style: disc!important;">Use of physical, verbal or written aggression
                                towards another adult or child.
                            </li>
                        </ul>
                        <p class="py-2">
                            In case a child feels uncomfortable in a particular class, or if you come across anyone who
                            misbehaves or shows disorderly conduct during the sessions/linked to the sessions, you can
                            report the incident at at the following helpline number: <span class="text-primary"><a
                                    class="text-primary" href="tel:+919971110599">+91 9971110599</a></span> or email
                            <span class="text-primary"><a class="text-primary" href="mailto:report@tneos.com">report@tneos.com</a></span>
                            , in writing or voice record their message (with details of the class, and screenshot of the
                            incident if possible) mentioning the particular reason/s of their discomfort.
                        </p>
                        <p>Tneos’s Child Safety Team will look into the incidents with utmost priority.</p>

                        <p>Appropriate action/s will be taken against any person who breaches the norms laid down by
                            Tneos.</p>

                        <p>In the endeavor to make online education safe for children, we request your support and
                            cooperation.</p>

                        <address>
                            <span style="font-weight: bolder;"><strong>Team </strong> <br/></span>
                            <span style="font-weight: bolder;"><strong>Tneos Eduloutions Ltd.</strong></span>
                        </address>
                    </div>
                </div>
            </div>
            <div class="container mb-3" style="">
                <div class="row  bg-white p-5 shadow">
                    <div class="col-md-4 mb-100 p-4 shadow rounded glass_water">
                        <div class="">
                            <h5 class="text-uppercase" style="font-weight: 100; font-size: 16px;">content</h5>
                            <small class="text-uppercase">Details</small>
                            <h6 class="text-capitalize" style="color: #0B3E8C;">Part A</h6>
                            <ol style="list-style: upper-roman!important; margin: 10px;">
                                <li style="list-style-type: upper-roman;"><a href="#policy">Policy Statement</a></li>
                                <li style="list-style-type: upper-roman;"><a href="#scope">Scope</a></li>
                                <li style="list-style-type: upper-roman;"><a href="#achieve">Achieving Child Safety</a>
                                </li>
                                <li style="list-style-type: upper-roman;"><a href="#understanding">Understanding Child
                                        Abuse</a></li>
                            </ol>
                            <h6 class="text-capitalize" style="color: #0B3E8C;">Part B</h6>
                            <ol style="list-style: upper-roman!important; margin: 10px;">
                                <li style="list-style-type: upper-roman;"><a href="#childSafety">Child Safety Code of
                                        Conduct</a></li>
                                <li style="list-style-type: upper-roman;"><a href="#preventive">Preventive Measures</a>
                                </li>
                                <li style="list-style-type: upper-roman;"><a href="#reporting">Reporting &nbsp; Redressal
                                        Mechanism</a></li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <img class="img-responsive mb-100"
                             src="{{asset('app-assets/img/bg-img/child-safety-01.webp')}}"
                             alt="Child Safety at Tneos Eduloutions Limited.">
                        <img class="img-responsive mb-100"
                             src="{{asset('app-assets/img/bg-img/child-safety-intro.webp')}}"
                             alt="Child Safety at Tneos Eduloutions Limited.">
                    </div>
                </div>
            </div>
            <div class="container mb-3" style="">
                <div class="row bg-white shadow p-5">
                    <div class="col-12">
                        <h6>PART-A</h6>
                        <p class="lead">Online Child Safety First Principles in Action</p>
                        <h4 id="#policy" style="font-size: 24px; font-weight: 100;"> I. Policy Statement</h4>
                        <p>Tneos is an online Edu-Tech Company which enable students to learn LIVE with teachers.</p>
                        <p>At Tneos. we acknowledge and affirm that children have an absolute right for a safe
                            environment that is aIso conducive- to their all-round growth; and that we are committed to
                            provide the same. We pledge to create and nurture an environment on the fundamentals of
                            ethical practices and responsible behavior towards each child and in their best
                            interest.</p>
                        <p>Through this policy, we undertake to adopt dedicated methods of prevention of any sort of
                            child abuse, including responsible modes of employing persons in the organization, creating
                            awareness on the policy in the Organization, developing & upgrading technological solutions
                            and ensuring adherence to the mandates of the policy by each of our stake holders.</p>
                        <p>We are further committed to have a sensitive and efficient redressal mechanism that would
                            address each concern that may be raised, in a timebound and effective manner, with no
                            tolerance to any act of child abuse.</p>
                        <p>It is a firm belief of each of us at Tneos that only a convergence of our thoughts,
                            intentions and action in this regard would lead us in the path of achieving the objective of
                            this policy.</p>

                        <h4 id="scope" style="font-size: 24px; font-weight: 100;">II. Scope</h4>
                        <p>This policy is applicable to alI persons and organization associated with Tneos, referred to
                            as Tneos’s Stakeholders, including:
                        </p>
                        <p class="pl-2">I. Employees of Tneos, who maybe full-time or part-time employees, permanent or
                            temporary
                            employee, regular permanent employee or employed on contract</p>
                        <p class="pl-2">II. Organization and persons belonging to that organization, who may partner
                            and/ or work
                            with Tneos in any capacity, even for a limited time period or job</p>
                        <p class="pl-2">III. Volunteers who may work with Tneos, in whichever capacity, even for a
                            Limited period of
                            time</p>
                        <p class="pl-2">IV. Children enrolled as students of Tneos and their parents or guardians who
                            associate with
                            the child in the official record of Tneos</p>
                        <p class="pl-2">V. Children who may not be enrolled but are reached out through marketing or
                            sales of the
                            product and their parents or guardians who associate with the Child</p>
                        <p class="pl-2">VI. Any other person or Organization ns who may be officially associated with
                            Tneos and its
                            ambit of work and activity</p>

                        <p>In instances and circumstances where Tneos may not have required control over the person
                            alleged of any concern under this policy, including an instance of child abuse, Tneos shall
                            provide the required co-operation, assistance and support to such parent or guardian of the
                            affected child, in approaching any external, legal mechanism including the Police and/or the
                            Courts, though Tneos is its self not personally liable in such instances.</p>

                        <h4 id="achieve" style="font-size: 24px; font-weight: 100;">III. Achieving Child Safety</h4>
                        <p>Tneos declares that we shall make it mandatory for ourselves to follow these norms so as to
                            achieve and n nurture a safe and happy environment for each child who associates oneself
                            with us.</p>

                        <p>&#8226; &#8195; Employ and hire persons with integrity and complete respect towards the right
                            of
                            every person for a safe environment free of abuse in general, and that of children in
                            particular.
                        </p>
                        <p><b><i>Declaration to be signed by each person to be employed by Tneos is in Annexure
                                    1</i></b></p>

                        <p>&#8226; &#8195; Make the Chi Id Safety Code of Conduct a necessary part of an Employment
                            agreement
                            and a contract with any individual including parents or guardians of students or
                            Organization to be associated with Tneos, and further to strict treat a breach of such Code
                            of Conduct as a misconduct, further subjected to an inquiry and action against such
                            misconduct.</p>

                        <p><b><i>Child Safety Code of Conduct is listed in Part B(I) of the Policy</i></b></p>

                        <p>&#8226; &#8195; Create awareness among all Tneos Stakeholders through various, timely and
                            periodic
                            programme, including sessions, and any other r creative methods of sensitizing and spreading
                            awareness on aspects of child safety.</p>

                        <p>&#8226; &#8195; Update the security measures pertaining to on li ne and internet-based
                            communication and
                            interaction periodically to make sure that none of the medium is misused.</p>
                        <p><b><i>Preventive measures are listed in Part B(II) of the policy</i></b></p>

                        <p>&#8226; &#8195; Formulate a redressal mechanism, where we shall have designated Child Safety
                            Champions
                            and Teams, who can be contacted easily and immediately in case of a concern or complaint and
                            a
                            Committee comprising; of set of trained, sensitive, experienced, responsible and responsive
                            individuals as Members who shall conduct inquiry into each compliant raised and recommend
                            appropriate actions.</p>
                        <p><b><i>Redressal Mechanism Process is mentioned in Part B(III) of the policy</i></b></p>

                        <p>&#8226; &#8195; Have in-house professional psychological counselors who sha II provide their
                            expert
                            services to any chi Id who may requires such services, whet her due to an experience of
                            abuse or
                            due to a challenging behavioral issue that needs to be addressed.</p>
                        <p>&#8226; &#8195; Ensure that any decision taken regarding any child is in their best interest,
                            in term s
                            of fulfillment of their basic rights, needs, identify, social I well-being physical,
                            emotional
                            and intellectual wellbeing.</p>
                        <img class="px-auto" src="{{asset('app-assets/img/bg-img/girl-child-safety.webp')}}"
                             alt="Girl Child Safety...">
                    </div>
                </div>

            </div>
            <div class="container mb-3" style="">
                <div class="row bg-white shadow p-5">
                    <div class="col-12">
                        <h4 id="#understanding" style="font-size: 24px; font-weight: 100;"> IV. Understanding Child
                            Abuse</h4>
                        <p>Child Abuse, means any form of abuse of a child, whether emotional, behavioral, verbal,
                            physical, sexual, commercial or any other exploitation of a child and includes any action
                            that results in actual or potential harm to a child. whether do ne intentionally or
                            un-intentionally, in person or through phone or internet enabled virtual platforms.</p>
                        <p>A chiId is a person who has not completed eighteen years of age.</p>
                        <h5 class="" style="font-weight: 100;">Types of Child Abuse</h5>
                        <p><b>1. Emotional abuse : </b> Shall mean any persistent behavioral involving iII-treatment
                            leading to the
                            impairment of the chiId emotional stability, health and development, which may occur
                            independently or coupled with any other manner of verbal, physical or sexual abuse. The need
                            of
                            physical contact is not a necessary factor in identifying emotional abuse.</p>
                        <div class="p-3">
                            <p><b>Emotional abuse may include:</b></p>
                            <ol style="list-style: lower-latin;  margin: 10px;">
                                <li style="list-style-type: lower-latin">Bullying - acts of harassment, embarrassment,
                                    taunting insulting or threatening behaviour
                                </li>
                                <li style="list-style-type: lower-latin">Stalking - re peated and persistent following
                                </li>
                                <li style="list-style-type: lower-latin">Discrimination on grounds of sex, caste.
                                    religion, race, language or any other no n-apparent
                                </li>
                                <li style="list-style-type: lower-latin">Conveying to the child that she/he is
                                    inadequate, worthIess or unloved
                                </li>
                                <li style="list-style-type: lower-latin">Preventing the child from normal social
                                    interactions
                                </li>
                                <li style="list-style-type: lower-latin">Causing the chi Id to be frightened, or in
                                    danger
                                </li>
                            </ol>
                        </div>

                        <p><b>2. Physical abuse: </b> Shall mean any non -accidental act causing physical injury or
                            impairment, pain or trauma to the child.</p>

                        <p><b>3. Sexual abuse: </b> Shall mean, engaging in sexual activities with a child who,
                            according to the relevant provisions of Protection of Children from Sexual offences Act.
                            2012 (POCSO Act) and Indian Penal Code, 1860, has not reached the legal age for sexual
                            activities and any sexuaI act, sexual contact, sexual harassment or sexual exploitation of a
                            child, whether completed or attempted, whether through direct physical contact or thro ugh
                            virtual platforms (Mobile phone, online/ internet-based platforms, computers etc.)</p>


                        <div class="p-3">
                            <p><b>Sexual abuse may include:</b></p>
                            <ol style="list-style: upper-latin;  margin: 10px;">
                                <li style="list-style-type: lower-latin">Sexual acts of penetration of the vagina or an
                                    us
                                </li>
                                <li style="list-style-type: lower-latin">Masturbation</li>
                                <li style="list-style-type: lower-latin">Molestation</li>
                                <li style="list-style-type: lower-latin">Touching breasts, vagina, penis with sexual
                                    intent
                                </li>
                                <li style="list-style-type: lower-latin">Expositing or Involving a child in
                                    pornography
                                </li>
                                <li style="list-style-type: lower-latin">Soliciting a child to engage in sexual
                                    activity
                                </li>
                                <li style="list-style-type: lower-latin">Sexual harassment: any physical, verbal,
                                    gestural, behavioural or emotionaI act
                                    with sexual intent that affects the chiId’s emotional and mental health
                                </li>
                                <li style="list-style-type: lower-latin">Sexual exploitation: act of using the
                                    chiId for one’s own sexual needs or using the child sexually for monetary or any
                                    other personal benefit
                                </li>
                            </ol>
                        </div>
                        <p><b>4. Child to child abuse: </b> Concerns that may be raised about the abuse of a child by
                            another
                            child shall be responded to with sensitivity, taking into account the vulnerabilities of
                            both the children involved. They shall however be dealt with through the child protection
                            procedures, and in accordance with the provisions of Juvenile Justice (Care and Protection
                            of Child ren} Act, 2015. Dealing with abusive children requires a sensitive approach, that
                            would ensure protection of the affected child and supporting the child with abusive nature
                            to address such behaviors.</p>
                        <div class="col-12 p-0 d-none d-sm-none d-md-block d-md-block d-lg-block d-xl-block"
                             style="background-image: url({{asset('app-assets/img/bg-img/Child-and-family.webp')}}); background-size: 100%; background-repeat: no-repeat;">
                            <div class="m-0 text-center"
                                 style="background-color: rgba(255, 255, 255,0.5); mix-blend-mode: overlay; min-height: 600px;">
                                <h2 class="display-1">Tneos</h2>
                            </div>
                        </div>
                        <p>Consensual sexual activity between two minors, though amounts to an offense as per the
                            applicable Laws, Tneos resolves to deal with such concerns sensitively, when raised with us,
                            respecting both person rights and vulnerabilities.</p>

                        <p>In any child-to-child abuse, Tneos is committed to support the parents and guardians of the
                            child in whatever legal process that they may want to approach. We shall also be providing
                            professional counselling to the children involved.</p>

                        <p><b>5. Sexual Harassment:</b> Shall mean any act, where any person harasses a child with
                            sexual intent -</p>
                        <div class="p-3">
                            <ol style="list-style: upper-latin;  margin: 10px;">
                                <li style="list-style-type: lower-latin">Utters any word, makes sound, makes any
                                    gesture/exhibits any object or part of body to the child.
                                </li>
                                <li style="list-style-type: lower-latin">Makes a child exhibit his body or any pa rt of
                                    his body so as it is seen by such a person or any other person
                                </li>
                                <li style="list-style-type: lower-latin">Shows any object to a child in any form or
                                    media for pornographic purposes
                                </li>
                                <li style="list-style-type: lower-latin">Repeatedly or constantly follows or watches or
                                    contacts a child either directly or through electronic, digital or other means
                                </li>
                                <li style="list-style-type: lower-latin">Threatens using any form of media real, or
                                    fabricated depiction through electronic, fiIm or digital or any other mode, of any
                                    part of the body of the child or the involvement of the child in sexual act
                                </li>
                                <li style="list-style-type: lower-latin">Entices a child for pornographic purposes or
                                    gives gratification
                                </li>
                            </ol>
                        </div>
                        <p><b>6. Abuse through virtual platforms or Online: </b> Any act of abuse whether verbal.
                            emotional or sexual abuse, done through any virtual platform including but not limited to
                            mobile phones, computers, tablets be it through platforms conduct in g the online classes, e
                            mails, social media or personal chatting platforms.
                            Online abuse may include:</p>
                        <div class="p-3">
                            <ol style="list-style: lower-latin;  margin: 10px;">
                                <li style="list-style-type: lower-latin"><b style="font-weight: 900;">Bullying</b>- Acts
                                    of harassment, embarrassment,
                                    taunting, insulting or threatening behaviour towards a child by using the internet,
                                    e-mail or other electronic communication device.
                                </li>
                                <li style="list-style-type: lower-latin"><b style="font-weight: 900;">Stalking</b>- When
                                    a child is repeatedly and
                                    persistently followed and pursued online by e-mail or other electronic
                                    communication.
                                </li>
                                <li style="list-style-type: lower-latin"><b style="font-weight: 900;">Online
                                        harassment</b>- On line- harassment is used
                                    as an umbrella term to describe the use of the internet to harass, threaten or
                                    maliciously embarrass another party. It can be in the form of verbal, sexual,
                                    emotional, or social abuse and aimed at a person, a group of persons, or even an
                                    organisation.
                                </li>
                                <li style="list-style-type: lower-latin"><b style="font-weight: 900;">Unwanted
                                        exposure</b>- When any person sends
                                    pictures. videos, sound clips, cartoons or animations depicting sexual contents by
                                    any electronic means.
                                </li>
                                <li style="list-style-type: lower-latin"><b style="font-weight: 900;">Pornography</b> -
                                    Any visual depiction of sexually
                                    explicit conduct involving a child which includes photographs, videos, digital
                                    computer-generated image indistinguishable from an actual child and image created,
                                    adapted or modified, but appear to depiction a child, and also includes any visual
                                    depiction which is sexual in nature which is shown to a child.
                                </li>
                            </ol>
                            <p><b>Important Terms in a Child Abuse Case</b></p>
                            <div class="p-3">
                                <ol style="list-style: decimal;  margin: 10px;">
                                    <li style="list-style-type: decimal"><b style="font-weight: 900;">Victim </b>- Shall
                                        mean, a child who is enrolled as a student of Tneos or has been reached
                                        out for enrolment and has been subjected to abuse as per Part A (IV} of this
                                        policy
                                    </li>
                                    <li style="list-style-type: decimal"><b style="font-weight: 900;"> Child Abuse </b>-
                                        Shall mean any stake holder engaged with Tneos or any other person outside
                                        Tneos, who causes, initiates, supports child abuse as defined in Part A (IV) of
                                        this policy
                                    </li>
                                    <li style="list-style-type: decimal"><b style="font-weight: 900;"> Incident </b> -
                                        shaII refer to any incident of child abuse or potential child abuse and the
                                        term "Incidents shall be construed accordingly.
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mb-3" style="">
                <div class="row bg-white shadow p-5">
                    <div class="col-md-12">
                        <img class="img-responsive mb-100"
                             src="{{asset('app-assets/img/bg-img/enviroment-child-safety.webp')}}"
                             alt="Child Safety at Tneos Eduloutions Limited." style="width: 100%;">
                    </div>
                    <div class="col-12">
                        <h6>PART-B</h6>
                        <p class="lead">Ensuring Safe Learning Environment</p>
                        <h4 id="childSafety" style="font-size: 24px; font-weight: 100;">I. Child Safety Code of
                            Conduct</h4>
                        <p>Tneos expects all its stakeholders falling within the scope of this policy [Part A {II)] to
                            adhere to the following child safety code of conduct:
                        </p>
                        <div class="p-3">
                            <ol class="" style="list-style: upper-roman;  margin: 10px;">
                                <p>1. <b>Expected Behaviour and Actions</b></p>
                                <li class="ml-3" style="list-style-type: upper-roman"> Listen to the child and, their views and
                                    opinions
                                </li>
                                <li class="ml-3" style="list-style-type: upper-roman"> Have a non-judgmental attitude</li>
                                <li class="ml-3" style="list-style-type: upper-roman"> Treat every child with empathy and respect
                                    regardless of his/her race, colour, gender, sexuality, religion, language, heritage,
                                    religious belief, social origin, or any point that discriminated a child.
                                </li>
                                <li class="ml-3" style="list-style-type: upper-roman"> Use appropriate language, behaviors while
                                    interacting with the child
                                </li>
                                <li class="ml-3" style="list-style-type: upper-roman"> Use appropriate language, behaviors in any
                                    online medium used by the organisation to communicate or engage with children
                                </li>
                                <li class="ml-3" style="list-style-type: upper-roman"> Create an environment that enables children to
                                    share and express freely
                                </li>
                                <li class="ml-3" style="list-style-type: upper-roman"> Always take permission and written consent
                                    from guardian before taking photos or videos of a child
                                </li>
                                <li class="ml-3" style="list-style-type: upper-roman"> keep all personal information of children,
                                    their parents and guardians confidential and secure,
                                </li>
                                <li class="ml-3" style="list-style-type: upper-roman"> such information shall only be shared with
                                    authorised individuals
                                </li>
                                <li class="ml-3" style="list-style-type: upper-roman"> The live online classes and the content,
                                    including but not limited to audio visual content is age appropriate and culturally
                                    appropriate
                                </li>
                            </ol>
                        </div>
                        <div class="p-3">
                            <ol class="" style="list-style: upper-roman;  margin: 10px;">
                                <p>2. <b>Prohibited Behaviours and Actions</b></p>
                                <li class="ml-3" style="list-style-type: upper-roman">Do not develop, induce or support any
                                    emotional, online/offline physical abuse or sexual relationship with children in any
                                    way
                                </li>
                                <li class="ml-3" style="list-style-type: upper-roman">Do not use or encourage the use of alcohol,
                                    drugs, cigarettes or other intoxicating substance in any of your interaction with
                                    children
                                </li>
                                <li class="ml-3" style="list-style-type: upper-roman">Do not develop any form of relationship or
                                    arrangement with children including but not limited to financial, which could be
                                    deemed to be exploitative or abusive
                                </li>
                                <li class="ml-3" style="list-style-type: upper-roman"> Do not share with or show children
                                    online/offline any inappropriate content including pornographic material or material
                                    that encourages crime, violence, racism, sexism, self- harm, suicide, cruelty
                                </li>
                                <li class="ml-3" style="list-style-type: upper-roman">Do not use language or behaviour towards
                                    children that is inappropriate, harassing, abusive, sexually provocative, demeaning,
                                    intimidating, discriminatory, or culturally insensitive
                                </li>
                            </ol>
                        </div>

                        <h4 id="preventive" style="font-size: 24px; font-weight: 100;">II. Preventive Measure</h4>
                        <p>In order to prevent commission any form of chiId abuse Tneos has laid down the foIIowing;
                            preventive measures and expects all its stake holders to adhere them:</p>
                        <div class="p-3">
                            <ol class="" style="list-style: upper-roman;  margin: 10px;">
                                <p>1. <b>On-Boarding and Awareness: Employee/ Student/ Teacher/ Vendor/ Any other
                                        Stakeholder</b></p>
                                <li class="ml-3" style="list-style-type: upper-roman">AII employees, fulItime, part time, including
                                    interns, volunteers, freelancers, parents or guardians and aII vendors who have
                                    contractual obligations with Tneos shalI sign the ChiId Safety Policy of Tneos, and
                                    wiII be bound by this policy.</li>
                                <li class="ml-3" style="list-style-type: upper-roman">The key documents of students shall be
                                    collected/along; with parents signatures, to have verified details of the students.</li>
                                <li class="ml-3" style="list-style-type: upper-roman">AII employees shalI undergo chiId safety
                                    training and awareness</li>
                                <li class="ml-3"style="list-style-type: upper-roman">AII children, parents/guardians shalI undergo a
                                    short training and awareness on child safety</li>
                                <li class="ml-3" style="list-style-type: upper-roman">Self-declare any previous case of criminal
                                    offence and child mistreatment /abuse as a part of application to Tneos.</li>

                            </ol>
                        </div>
                        <div class="p-3">
                            <ol class="" style="list-style: upper-roman;  margin: 10px;">
                                <p>2.<b> Data Collection Privacy</b></p>
                                <li class="ml-3" style="list-style-type: upper-roman">Any research or survey conducted will ensure safety of children, i.e., children are
                                    protected. not harassed or traumatised in any way during the process by taking a consent</li>
                                <li class="ml-3" style="list-style-type: upper-roman"> Data collected from children wilI not be shared and wilI be kept safe and secure, shared
                                    only with individuals who are authorised</li>
                            </ol>
                        </div>
                        <div class="p-3">
                            <ol class="" style="list-style: upper-roman;  margin: 10px;">
                                <p>3.<b>  Partnerships with Technical Experts for Child Safety</b></p>
                                <li class="ml-3" style="list-style-type: upper-roman"> Partnering with organisations to conduct age-appropriate sessions of safety of children</li>
                                <li class="ml-3" style="list-style-type: upper-roman"> Partnering for chiId safety inputs for all cases and to have external advisory</li>
                                <li class="ml-3" style="list-style-type: upper-roman"> Providing counselling both preventive and case specific counselling</li>
                                <li class="ml-3" style="list-style-type: upper-roman"> Partnering; with organisations in the space of child protection for effective
                                    implementation of the child Safety Policy</li>
                            </ol>
                        </div>
                        <div class="p-3">
                            <ol class="" style="list-style: upper-roman;  margin: 10px;">
                                <p>4.<b>Technology Solutions</b></p>
                                <li class="ml-3" style="list-style-type: upper-roman"> Developing and upgrading security measures to build systems for protecting data of
                                children enrolled</li>
                                <li class="ml-3" style="list-style-type: upper-roman"> Product related technology solution, like profanity fiIter for scrapping and preventing
                                abusive material within the online learning platform.</li>
                        </div>


                        <h4 id="reporting" style="font-size: 24px; font-weight: 100;">III. Reporting and Redressal Mechanism</h4>

                            <p>Tneos has responsive and accessible designated persons and teams for the redressal of any
                                concern or complaint may be raised by anyone with regard to child safety.</p>

                            <p>In case a child feels uncomfortable or abused as defined in the Child Safety Policy during
                            the sessions/Iinked to the sessions or have come across any case of abuse or anyone who
                            misbehaves or shows orderly /disorderly conduct the child/chiId’s parents/guardian can
                            report the incident to the Child Safety Teams through the helpline number +91 9971110599 or
                            email at report@tneos.com or whatsapp, in writing or voice record their message (with
                            details of the class, screenshot of the incident and fill up the form as per Annexure 2}
                                mentioning the particular reason/s of their discomfort.</p>

                        <p>The internal reporting and redressal mechanism committee shall comprise of:</p>
                        <p>Child Safety Team (CST}, Internal Steering Committee [ISC}.</p>

                        <p><b>Child Safety Team (CST)</b></p>
                            <p>The Child Safety team set up at the central level, is the team that receives complaints, and
                            will address the cases. based on the guidelines for redressal. This will be constituted by
                            individuals with a professional expertise in the area of Social work, Counselling and
                            experience of handling cases of sexual abuse/online sexual exploitation and lawyer. This
                            team will report to the Internal Steering committee. This is the key operational team set up
                            within Tneos, that will proactively conduct training, awareness programs, and ensure
                                redressal of cases in the most effective way possible.</p>

                        <p><b>Internal Steering Committee (ISC)</b></p>
                            <p>This is the apex team setup of internal team members and external advisor/s, who will be the
                            final authority for deliberation. safeguarding, execution, compliance and protecting the
                            interest of the child and that of the policy at all times. The committee set up will support
                            the Child Safety Team, to decide the actions for the cases. In case of dispute of decision,
                            the final decision will be taken by a neutral party, the external advisor representing this
                                steering committee.</p>


                        <p><strong>Note:</strong></p>
                            <p>As per sections of the POCSO Act, every person who suspects or has knowledge of the
                            commission of a sexual offence is required to report such offence. Also, any person making
                            false complaints or providing false information against any person with respect to a sexual
                                offence under the POCSO Act is punishable with imprisonment or fine or both under the Act.</p>

                            <p class="ml-3">&bull; In this context, all employees of Tneos are mandated to report any case to anyone
                            mentioned in Part B(III), of this policy.</p>
                            <p class="ml-3">&bull; This policy has been drafted after referring to all the existing child related laws
                            Annexure 3), policies and documents published by the Government of India. In case of any
                                conflict the Latter shall supersede.</p>

                        </div>
                    </div>
                </div>
    </section>
    @push('footer-scripts')
        <script type="text/javascript" language="javascript">
            $(function () {
                $(this).bind("contextmenu", function (e) {
                    e.preventDefault();
                });
            });
        </script>
    @endpush
@endsection
