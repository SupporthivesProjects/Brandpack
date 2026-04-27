
<?php include 'includes/header.php'; ?>

        <Maindiv class="mas_main">
            <div class="mas1">
                <div class="mas1_inner">
                    <h1 class="mas1_title">Hello, Tirthak</h1>
                    <p class="mas1_subtitle">Not you? <a href="#">Sign out.</a></p>
                </div>
            </div>
            <div class="mas2">
                <div class="mas2_details_panel">
                    <form class="mas2_details_panel_left">
                        <div class="mas2_detail_box">
                            <div class="mas2_detail_box_top">
                                <h1 class="mas2_details_box_title">My Details</h1>
                                <!-- <button class="btn btn_yellow_global ms-auto me-0">Update</button> -->
                                <div class="mobile_none">
                                    <button class="green_acc_button ms-auto me-0 ">Save changes</button>

                                </div>

                            </div>
                            <div class="mas2_detail_box_body">
                                <input type="text" class="form-control input_global_mehul" placeholder="Full Name">
                                <div class="dama_dam_mast_kalandar">
                                    <input type="email" class="form-control input_global_mehul"
                                        placeholder="Email Address">
                                    <input type="text" class="form-control input_global_mehul"
                                        placeholder="Phone number">
                                    <input type="text" class="form-control input_global_mehul"
                                        placeholder="Address line 1">
                                    <input type="text" class="form-control input_global_mehul"
                                        placeholder="City / town">
                                    <input type="text" class="form-control input_global_mehul" placeholder="Country">
                                    <input type="text" class="form-control input_global_mehul"
                                        placeholder="Zip / Postal Code">
                                </div>
                            </div>
                            <div class="desktop_none">
                                <button class="green_acc_button w-100">Save changes</button>

                            </div>
                        </div>
                        <div class="mas2_detail_img_box"></div>
                        <div class="mas2_detail_box">
                            <div class="mas2_detail_box_top">
                                <h1 class="mas2_details_box_title">Change Password</h1>

                                <div class="mobile_none">
                                    <button class="green_acc_button ms-auto me-0 ">Save changes</button>

                                </div>


                            </div>
                            <div class="mas2_detail_box_body">
                                <div class="dama_dam_mast_kalandar">
                                    <div class="passFiled">
                                        <input type="password" class="form-control input_global_mehul" id="pass"
                                            placeholder="Current Password">
                                        <button class="btn p-0 passEyeIcon" onclick="passwordEye(event, 'pass')"><img
                                                src="./img/ic.svg" alt="" class="img-fluid eyeIcon"></button>
                                    </div>
                                    <div class="passFiled">
                                        <input type="password" class="form-control input_global_mehul" id="cpass"
                                            placeholder="New Password">
                                        <button class="btn p-0 passEyeIcon" onclick="passwordEye(event,'cpass')"><img
                                                src="./img/ic.svg" alt="" class="img-fluid eyeIcon"></button>
                                    </div>
                                </div>
                            </div>
                            <div class="desktop_none">
                                <button class="green_acc_button w-100">Save changes</button>

                            </div>
                        </div>
                        <div class="mas2_detail_img_box"></div>
                        <div class="mas2_detail_box">
                            <div class="mas2_detail_box_top">
                                <h1 class="mas2_details_box_title">Order History</h1>
                                <button class="green_acc_button ms-auto me-0">View All</button>

                            </div>
                        </div>
                    </form>
                    <div class="mas2_details_panel_right">
                        <div class="custom_tab_wrapper">
                            <div class="">
                                <h3 class="mas2_dpr_title">My eSIMs</h3>
                                <div class="custom_tab_pagination" id="custom-tab-buttons" role="tablist">
                                    <button class="mas2_details_panel_right_tab_button active" id="custom-tab-btn1"
                                        data-bs-toggle="pill" data-bs-target="#custom-tab-pane1" type="button"
                                        role="tab">All</button>
                                    <button class="mas2_details_panel_right_tab_button" id="custom-tab-btn2"
                                        data-bs-toggle="pill" data-bs-target="#custom-tab-pane2" type="button"
                                        role="tab">Country</button>
                                    <button class="mas2_details_panel_right_tab_button" id="custom-tab-btn3"
                                        data-bs-toggle="pill" data-bs-target="#custom-tab-pane3" type="button"
                                        role="tab">Regional</button>
                                    <button class="mas2_details_panel_right_tab_button" id="custom-tab-btn4"
                                        data-bs-toggle="pill" data-bs-target="#custom-tab-pane4" type="button"
                                        role="tab">Global</button>
                                </div>
                            </div>

                            <div class="tab-content" id="custom-tab-content">
                                <div class="tab-pane fade show active" id="custom-tab-pane1" role="tabpanel"
                                    aria-labelledby="custom-tab-btn1" tabindex="0">
                                    <div class="scroll_card_outer">
                                        <div class="mas2_plan_card active">
                                            <div class="mas2_plan_card_top">
                                                <div class="mas2_pct_l"><img src="./img/brazil.svg" alt=""
                                                        class="img-fluid flaf_mas2">
                                                    <p class="mas2_flag_title">Brazil</p>
                                                </div>
                                                <div class="mas2_pct_r"><button
                                                        class="btn btn_yellow_global ms-auto me-0">Install eSIM</button>
                                                </div>
                                            </div>
                                            <div class="mas2_plan_card_bottom">
                                                <div class="mas2_plan_card_bottom_l">
                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" viewBox="0 0 16 16" fill="none">
                                                                <path
                                                                    d="M11.3333 2.66671L11.3333 13.3334M11.3333 13.3334L8.66667 10.6667M11.3333 13.3334L14 10.6667M4.66667 13.3334L4.66667 2.66671M4.66667 2.66671L2 5.33337M4.66667 2.66671L7.33333 5.33337"
                                                                    stroke="#47B147" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <p class="title">20&nbsp;GB</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:100%; background-color: #47B147;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">20&nbsp;GB</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                                                <path d="M12 2.5C17.2382 2.5 21.5 6.76182 21.5 12C21.5 17.2382 17.2382 21.5 12 21.5C6.76182 21.5 2.5 17.2382 2.5 12C2.5 6.76182 6.76182 2.5 12 2.5ZM12 3.16699C7.11123 3.16699 3.16699 7.11123 3.16699 12C3.16699 16.8888 7.11123 20.833 12 20.833C16.8888 20.833 20.833 16.8888 20.833 12C20.833 7.11123 16.8888 3.16699 12 3.16699ZM12.333 5.83301V11.667H16.5V12.333H11.667V5.83301H12.333Z" fill="#51AF5E" stroke="#51AF5E"/>
                                                              </svg>
                                                            <p class="title">30 days</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:80%; background-color: #DF3F3F;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">30</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mas2_pct_r">
                                                    <div onclick="window.location.href='myAccountIndividualEsim.php'"
                                                        class="btn btn_yellow_global_arrow"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M14.0391 5.08594L12.9609 6.16406L18.0469 11.25H3V12.75H18.0469L12.9609 17.8359L14.0391 18.9141L20.4141 12.5391L20.9297 12L20.4141 11.4609L14.0391 5.08594Z"
                                                                fill="white" />
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mas2_plan_card">
                                            <div class="mas2_plan_card_top">
                                                <div class="mas2_pct_l"><img src="./img/brazil.svg" alt=""
                                                        class="img-fluid flaf_mas2">
                                                    <p class="mas2_flag_title">Brazil</p>
                                                </div>
                                                <div class="mas2_pct_r">
                                                    <button class="btn btn_green_active ms-auto me-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            viewBox="0 0 16 16" fill="none">
                                                            <path
                                                                d="M10.5 1.9762V13.9762H13.5V1.9762H10.5ZM6.5 5.4762V13.9762H9.5V5.4762H6.5ZM2.5 8.9762V13.9762H5.5V8.9762H2.5Z"
                                                                fill="white" />
                                                        </svg>
                                                        Active
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="mas2_plan_card_bottom">
                                                <div class="mas2_plan_card_bottom_l">
                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" viewBox="0 0 16 16" fill="none">
                                                                <path
                                                                    d="M11.3333 2.66671L11.3333 13.3334M11.3333 13.3334L8.66667 10.6667M11.3333 13.3334L14 10.6667M4.66667 13.3334L4.66667 2.66671M4.66667 2.66671L2 5.33337M4.66667 2.66671L7.33333 5.33337"
                                                                    stroke="#47B147" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <p class="title">20&nbsp;GB</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:100%; background-color: #47B147;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">20&nbsp;GB</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                                                <path d="M12 2.5C17.2382 2.5 21.5 6.76182 21.5 12C21.5 17.2382 17.2382 21.5 12 21.5C6.76182 21.5 2.5 17.2382 2.5 12C2.5 6.76182 6.76182 2.5 12 2.5ZM12 3.16699C7.11123 3.16699 3.16699 7.11123 3.16699 12C3.16699 16.8888 7.11123 20.833 12 20.833C16.8888 20.833 20.833 16.8888 20.833 12C20.833 7.11123 16.8888 3.16699 12 3.16699ZM12.333 5.83301V11.667H16.5V12.333H11.667V5.83301H12.333Z" fill="#51AF5E" stroke="#51AF5E"/>
                                                              </svg>
                                                            <p class="title">30 days</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:80%; background-color: #DF3F3F;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">30</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mas2_pct_r">
                                                    <div class="btn btn_yellow_global_arrow"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M14.0391 5.08594L12.9609 6.16406L18.0469 11.25H3V12.75H18.0469L12.9609 17.8359L14.0391 18.9141L20.4141 12.5391L20.9297 12L20.4141 11.4609L14.0391 5.08594Z"
                                                                fill="white" />
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mas2_plan_card expired">
                                            <div class="mas2_plan_card_top">
                                                <div class="mas2_pct_l"><img src="./img/brazil.svg" alt=""
                                                        class="img-fluid flaf_mas2">
                                                    <p class="mas2_flag_title">Brazil</p>
                                                </div>
                                                <div class="mas2_pct_r"><button
                                                        class="btn btn_red_expired ms-auto me-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            viewBox="0 0 16 16" fill="none">
                                                            <path
                                                                d="M3.70336 3L3 3.70336L7.29664 8L3 12.2966L3.70336 13L8 8.70336L12.2966 13L13 12.2966L8.70336 8L13 3.70336L12.2966 3L8 7.29664L3.70336 3Z"
                                                                fill="white" />
                                                        </svg>Expired</button>
                                                </div>
                                            </div>
                                            <div class="mas2_plan_card_bottom">
                                                <div class="mas2_plan_card_bottom_l">
                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" viewBox="0 0 16 16" fill="none">
                                                                <path
                                                                    d="M11.3333 2.66671L11.3333 13.3334M11.3333 13.3334L8.66667 10.6667M11.3333 13.3334L14 10.6667M4.66667 13.3334L4.66667 2.66671M4.66667 2.66671L2 5.33337M4.66667 2.66671L7.33333 5.33337"
                                                                    stroke="#47B147" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <p class="title">20&nbsp;GB</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:100%; background-color: #47B147;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">20&nbsp;GB</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                                                <path d="M12 2.5C17.2382 2.5 21.5 6.76182 21.5 12C21.5 17.2382 17.2382 21.5 12 21.5C6.76182 21.5 2.5 17.2382 2.5 12C2.5 6.76182 6.76182 2.5 12 2.5ZM12 3.16699C7.11123 3.16699 3.16699 7.11123 3.16699 12C3.16699 16.8888 7.11123 20.833 12 20.833C16.8888 20.833 20.833 16.8888 20.833 12C20.833 7.11123 16.8888 3.16699 12 3.16699ZM12.333 5.83301V11.667H16.5V12.333H11.667V5.83301H12.333Z" fill="#51AF5E" stroke="#51AF5E"/>
                                                              </svg>
                                                            <p class="title">30 days</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:80%; background-color: #DF3F3F;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">30</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mas2_pct_r">
                                                    <div class="btn btn_yellow_global_arrow"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M14.0391 5.08594L12.9609 6.16406L18.0469 11.25H3V12.75H18.0469L12.9609 17.8359L14.0391 18.9141L20.4141 12.5391L20.9297 12L20.4141 11.4609L14.0391 5.08594Z"
                                                                fill="white" />
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mas2_plan_card expired">
                                            <div class="mas2_plan_card_top">
                                                <div class="mas2_pct_l"><img src="./img/brazil.svg" alt=""
                                                        class="img-fluid flaf_mas2">
                                                    <p class="mas2_flag_title">Brazil</p>
                                                </div>
                                                <div class="mas2_pct_r"><button
                                                        class="btn btn_yellow_global ms-auto me-0">Install eSIM</button>
                                                </div>
                                            </div>
                                            <div class="mas2_plan_card_bottom">
                                                <div class="mas2_plan_card_bottom_l">
                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" viewBox="0 0 16 16" fill="none">
                                                                <path
                                                                    d="M11.3333 2.66671L11.3333 13.3334M11.3333 13.3334L8.66667 10.6667M11.3333 13.3334L14 10.6667M4.66667 13.3334L4.66667 2.66671M4.66667 2.66671L2 5.33337M4.66667 2.66671L7.33333 5.33337"
                                                                    stroke="#47B147" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <p class="title">20&nbsp;GB</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:100%; background-color: #47B147;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">20&nbsp;GB</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                                                <path d="M12 2.5C17.2382 2.5 21.5 6.76182 21.5 12C21.5 17.2382 17.2382 21.5 12 21.5C6.76182 21.5 2.5 17.2382 2.5 12C2.5 6.76182 6.76182 2.5 12 2.5ZM12 3.16699C7.11123 3.16699 3.16699 7.11123 3.16699 12C3.16699 16.8888 7.11123 20.833 12 20.833C16.8888 20.833 20.833 16.8888 20.833 12C20.833 7.11123 16.8888 3.16699 12 3.16699ZM12.333 5.83301V11.667H16.5V12.333H11.667V5.83301H12.333Z" fill="#51AF5E" stroke="#51AF5E"/>
                                                              </svg>
                                                            <p class="title">30 days</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:80%; background-color: #DF3F3F;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">30</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mas2_pct_r">
                                                    <div class="btn btn_yellow_global_arrow"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M14.0391 5.08594L12.9609 6.16406L18.0469 11.25H3V12.75H18.0469L12.9609 17.8359L14.0391 18.9141L20.4141 12.5391L20.9297 12L20.4141 11.4609L14.0391 5.08594Z"
                                                                fill="white" />
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mas2_plan_card expired">
                                            <div class="mas2_plan_card_top">
                                                <div class="mas2_pct_l"><img src="./img/brazil.svg" alt=""
                                                        class="img-fluid flaf_mas2">
                                                    <p class="mas2_flag_title">Brazil</p>
                                                </div>
                                                <div class="mas2_pct_r"><button
                                                        class="btn btn_yellow_global ms-auto me-0">Install eSIM</button>
                                                </div>
                                            </div>
                                            <div class="mas2_plan_card_bottom">
                                                <div class="mas2_plan_card_bottom_l">
                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" viewBox="0 0 16 16" fill="none">
                                                                <path
                                                                    d="M11.3333 2.66671L11.3333 13.3334M11.3333 13.3334L8.66667 10.6667M11.3333 13.3334L14 10.6667M4.66667 13.3334L4.66667 2.66671M4.66667 2.66671L2 5.33337M4.66667 2.66671L7.33333 5.33337"
                                                                    stroke="#47B147" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <p class="title">20&nbsp;GB</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:100%; background-color: #47B147;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">20&nbsp;GB</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                                                <path d="M12 2.5C17.2382 2.5 21.5 6.76182 21.5 12C21.5 17.2382 17.2382 21.5 12 21.5C6.76182 21.5 2.5 17.2382 2.5 12C2.5 6.76182 6.76182 2.5 12 2.5ZM12 3.16699C7.11123 3.16699 3.16699 7.11123 3.16699 12C3.16699 16.8888 7.11123 20.833 12 20.833C16.8888 20.833 20.833 16.8888 20.833 12C20.833 7.11123 16.8888 3.16699 12 3.16699ZM12.333 5.83301V11.667H16.5V12.333H11.667V5.83301H12.333Z" fill="#51AF5E" stroke="#51AF5E"/>
                                                              </svg>
                                                            <p class="title">30 days</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:80%; background-color: #DF3F3F;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">30</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mas2_pct_r">
                                                    <div class="btn btn_yellow_global_arrow"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M14.0391 5.08594L12.9609 6.16406L18.0469 11.25H3V12.75H18.0469L12.9609 17.8359L14.0391 18.9141L20.4141 12.5391L20.9297 12L20.4141 11.4609L14.0391 5.08594Z"
                                                                fill="white" />
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tab-pane2" role="tabpanel"
                                    aria-labelledby="custom-tab-btn2" tabindex="0">
                                    <div class="scroll_card_outer">
                                        <div class="mas2_plan_card">
                                            <div class="mas2_plan_card_top">
                                                <div class="mas2_pct_l"><img src="./img/brazil.svg" alt=""
                                                        class="img-fluid flaf_mas2">
                                                    <p class="mas2_flag_title">Brazil</p>
                                                </div>
                                                <div class="mas2_pct_r"><button
                                                        class="btn btn_yellow_global ms-auto me-0">Install eSIM</button>
                                                </div>
                                            </div>
                                            <div class="mas2_plan_card_bottom">
                                                <div class="mas2_plan_card_bottom_l">
                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" viewBox="0 0 16 16" fill="none">
                                                                <path
                                                                    d="M11.3333 2.66671L11.3333 13.3334M11.3333 13.3334L8.66667 10.6667M11.3333 13.3334L14 10.6667M4.66667 13.3334L4.66667 2.66671M4.66667 2.66671L2 5.33337M4.66667 2.66671L7.33333 5.33337"
                                                                    stroke="#47B147" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <p class="title">20&nbsp;GB</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:100%; background-color: #47B147;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">20&nbsp;GB</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                                                <path d="M12 2.5C17.2382 2.5 21.5 6.76182 21.5 12C21.5 17.2382 17.2382 21.5 12 21.5C6.76182 21.5 2.5 17.2382 2.5 12C2.5 6.76182 6.76182 2.5 12 2.5ZM12 3.16699C7.11123 3.16699 3.16699 7.11123 3.16699 12C3.16699 16.8888 7.11123 20.833 12 20.833C16.8888 20.833 20.833 16.8888 20.833 12C20.833 7.11123 16.8888 3.16699 12 3.16699ZM12.333 5.83301V11.667H16.5V12.333H11.667V5.83301H12.333Z" fill="#51AF5E" stroke="#51AF5E"/>
                                                              </svg>
                                                            <p class="title">30 days</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:80%; background-color: #DF3F3F;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">30</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mas2_pct_r">
                                                    <div class="btn btn_yellow_global_arrow"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M14.0391 5.08594L12.9609 6.16406L18.0469 11.25H3V12.75H18.0469L12.9609 17.8359L14.0391 18.9141L20.4141 12.5391L20.9297 12L20.4141 11.4609L14.0391 5.08594Z"
                                                                fill="white" />
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mas2_plan_card">
                                            <div class="mas2_plan_card_top">
                                                <div class="mas2_pct_l"><img src="./img/brazil.svg" alt=""
                                                        class="img-fluid flaf_mas2">
                                                    <p class="mas2_flag_title">Brazil</p>
                                                </div>
                                                <div class="mas2_pct_r"><button
                                                        class="btn btn_yellow_global ms-auto me-0">Install eSIM</button>
                                                </div>
                                            </div>
                                            <div class="mas2_plan_card_bottom">
                                                <div class="mas2_plan_card_bottom_l">
                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" viewBox="0 0 16 16" fill="none">
                                                                <path
                                                                    d="M11.3333 2.66671L11.3333 13.3334M11.3333 13.3334L8.66667 10.6667M11.3333 13.3334L14 10.6667M4.66667 13.3334L4.66667 2.66671M4.66667 2.66671L2 5.33337M4.66667 2.66671L7.33333 5.33337"
                                                                    stroke="#47B147" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <p class="title">20&nbsp;GB</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:100%; background-color: #47B147;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">20&nbsp;GB</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                                                <path d="M12 2.5C17.2382 2.5 21.5 6.76182 21.5 12C21.5 17.2382 17.2382 21.5 12 21.5C6.76182 21.5 2.5 17.2382 2.5 12C2.5 6.76182 6.76182 2.5 12 2.5ZM12 3.16699C7.11123 3.16699 3.16699 7.11123 3.16699 12C3.16699 16.8888 7.11123 20.833 12 20.833C16.8888 20.833 20.833 16.8888 20.833 12C20.833 7.11123 16.8888 3.16699 12 3.16699ZM12.333 5.83301V11.667H16.5V12.333H11.667V5.83301H12.333Z" fill="#51AF5E" stroke="#51AF5E"/>
                                                              </svg>
                                                            <p class="title">30 days</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:80%; background-color: #DF3F3F;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">30</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mas2_pct_r">
                                                    <div class="btn btn_yellow_global_arrow"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M14.0391 5.08594L12.9609 6.16406L18.0469 11.25H3V12.75H18.0469L12.9609 17.8359L14.0391 18.9141L20.4141 12.5391L20.9297 12L20.4141 11.4609L14.0391 5.08594Z"
                                                                fill="white" />
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mas2_plan_card">
                                            <div class="mas2_plan_card_top">
                                                <div class="mas2_pct_l"><img src="./img/brazil.svg" alt=""
                                                        class="img-fluid flaf_mas2">
                                                    <p class="mas2_flag_title">Brazil</p>
                                                </div>
                                                <div class="mas2_pct_r"><button
                                                        class="btn btn_yellow_global ms-auto me-0">Install eSIM</button>
                                                </div>
                                            </div>
                                            <div class="mas2_plan_card_bottom">
                                                <div class="mas2_plan_card_bottom_l">
                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" viewBox="0 0 16 16" fill="none">
                                                                <path
                                                                    d="M11.3333 2.66671L11.3333 13.3334M11.3333 13.3334L8.66667 10.6667M11.3333 13.3334L14 10.6667M4.66667 13.3334L4.66667 2.66671M4.66667 2.66671L2 5.33337M4.66667 2.66671L7.33333 5.33337"
                                                                    stroke="#47B147" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <p class="title">20&nbsp;GB</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:100%; background-color: #47B147;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">20&nbsp;GB</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                                                <path d="M12 2.5C17.2382 2.5 21.5 6.76182 21.5 12C21.5 17.2382 17.2382 21.5 12 21.5C6.76182 21.5 2.5 17.2382 2.5 12C2.5 6.76182 6.76182 2.5 12 2.5ZM12 3.16699C7.11123 3.16699 3.16699 7.11123 3.16699 12C3.16699 16.8888 7.11123 20.833 12 20.833C16.8888 20.833 20.833 16.8888 20.833 12C20.833 7.11123 16.8888 3.16699 12 3.16699ZM12.333 5.83301V11.667H16.5V12.333H11.667V5.83301H12.333Z" fill="#51AF5E" stroke="#51AF5E"/>
                                                              </svg>
                                                            <p class="title">30 days</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:80%; background-color: #DF3F3F;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">30</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mas2_pct_r">
                                                    <div class="btn btn_yellow_global_arrow"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M14.0391 5.08594L12.9609 6.16406L18.0469 11.25H3V12.75H18.0469L12.9609 17.8359L14.0391 18.9141L20.4141 12.5391L20.9297 12L20.4141 11.4609L14.0391 5.08594Z"
                                                                fill="white" />
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mas2_plan_card">
                                            <div class="mas2_plan_card_top">
                                                <div class="mas2_pct_l"><img src="./img/brazil.svg" alt=""
                                                        class="img-fluid flaf_mas2">
                                                    <p class="mas2_flag_title">Brazil</p>
                                                </div>
                                                <div class="mas2_pct_r"><button
                                                        class="btn btn_yellow_global ms-auto me-0">Install eSIM</button>
                                                </div>
                                            </div>
                                            <div class="mas2_plan_card_bottom">
                                                <div class="mas2_plan_card_bottom_l">
                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" viewBox="0 0 16 16" fill="none">
                                                                <path
                                                                    d="M11.3333 2.66671L11.3333 13.3334M11.3333 13.3334L8.66667 10.6667M11.3333 13.3334L14 10.6667M4.66667 13.3334L4.66667 2.66671M4.66667 2.66671L2 5.33337M4.66667 2.66671L7.33333 5.33337"
                                                                    stroke="#47B147" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <p class="title">20&nbsp;GB</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:100%; background-color: #47B147;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">20&nbsp;GB</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                                                <path d="M12 2.5C17.2382 2.5 21.5 6.76182 21.5 12C21.5 17.2382 17.2382 21.5 12 21.5C6.76182 21.5 2.5 17.2382 2.5 12C2.5 6.76182 6.76182 2.5 12 2.5ZM12 3.16699C7.11123 3.16699 3.16699 7.11123 3.16699 12C3.16699 16.8888 7.11123 20.833 12 20.833C16.8888 20.833 20.833 16.8888 20.833 12C20.833 7.11123 16.8888 3.16699 12 3.16699ZM12.333 5.83301V11.667H16.5V12.333H11.667V5.83301H12.333Z" fill="#51AF5E" stroke="#51AF5E"/>
                                                              </svg>
                                                            <p class="title">30 days</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:80%; background-color: #DF3F3F;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">30</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mas2_pct_r">
                                                    <div class="btn btn_yellow_global_arrow"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M14.0391 5.08594L12.9609 6.16406L18.0469 11.25H3V12.75H18.0469L12.9609 17.8359L14.0391 18.9141L20.4141 12.5391L20.9297 12L20.4141 11.4609L14.0391 5.08594Z"
                                                                fill="white" />
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mas2_plan_card">
                                            <div class="mas2_plan_card_top">
                                                <div class="mas2_pct_l"><img src="./img/brazil.svg" alt=""
                                                        class="img-fluid flaf_mas2">
                                                    <p class="mas2_flag_title">Brazil</p>
                                                </div>
                                                <div class="mas2_pct_r"><button
                                                        class="btn btn_yellow_global ms-auto me-0">Install eSIM</button>
                                                </div>
                                            </div>
                                            <div class="mas2_plan_card_bottom">
                                                <div class="mas2_plan_card_bottom_l">
                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" viewBox="0 0 16 16" fill="none">
                                                                <path
                                                                    d="M11.3333 2.66671L11.3333 13.3334M11.3333 13.3334L8.66667 10.6667M11.3333 13.3334L14 10.6667M4.66667 13.3334L4.66667 2.66671M4.66667 2.66671L2 5.33337M4.66667 2.66671L7.33333 5.33337"
                                                                    stroke="#47B147" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <p class="title">20&nbsp;GB</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:100%; background-color: #47B147;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">20&nbsp;GB</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                                                <path d="M12 2.5C17.2382 2.5 21.5 6.76182 21.5 12C21.5 17.2382 17.2382 21.5 12 21.5C6.76182 21.5 2.5 17.2382 2.5 12C2.5 6.76182 6.76182 2.5 12 2.5ZM12 3.16699C7.11123 3.16699 3.16699 7.11123 3.16699 12C3.16699 16.8888 7.11123 20.833 12 20.833C16.8888 20.833 20.833 16.8888 20.833 12C20.833 7.11123 16.8888 3.16699 12 3.16699ZM12.333 5.83301V11.667H16.5V12.333H11.667V5.83301H12.333Z" fill="#51AF5E" stroke="#51AF5E"/>
                                                              </svg>
                                                            <p class="title">30 days</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:80%; background-color: #DF3F3F;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">30</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mas2_pct_r">
                                                    <div class="btn btn_yellow_global_arrow"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M14.0391 5.08594L12.9609 6.16406L18.0469 11.25H3V12.75H18.0469L12.9609 17.8359L14.0391 18.9141L20.4141 12.5391L20.9297 12L20.4141 11.4609L14.0391 5.08594Z"
                                                                fill="white" />
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tab-pane3" role="tabpanel"
                                    aria-labelledby="custom-tab-btn3" tabindex="0">
                                    <div class="scroll_card_outer">
                                        <div class="mas2_plan_card">
                                            <div class="mas2_plan_card_top">
                                                <div class="mas2_pct_l"><img src="./img/brazil.svg" alt=""
                                                        class="img-fluid flaf_mas2">
                                                    <p class="mas2_flag_title">Brazil</p>
                                                </div>
                                                <div class="mas2_pct_r"><button
                                                        class="btn btn_yellow_global ms-auto me-0">Install eSIM</button>
                                                </div>
                                            </div>
                                            <div class="mas2_plan_card_bottom">
                                                <div class="mas2_plan_card_bottom_l">
                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" viewBox="0 0 16 16" fill="none">
                                                                <path
                                                                    d="M11.3333 2.66671L11.3333 13.3334M11.3333 13.3334L8.66667 10.6667M11.3333 13.3334L14 10.6667M4.66667 13.3334L4.66667 2.66671M4.66667 2.66671L2 5.33337M4.66667 2.66671L7.33333 5.33337"
                                                                    stroke="#47B147" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <p class="title">20&nbsp;GB</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:100%; background-color: #47B147;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">20&nbsp;GB</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                                                <path d="M12 2.5C17.2382 2.5 21.5 6.76182 21.5 12C21.5 17.2382 17.2382 21.5 12 21.5C6.76182 21.5 2.5 17.2382 2.5 12C2.5 6.76182 6.76182 2.5 12 2.5ZM12 3.16699C7.11123 3.16699 3.16699 7.11123 3.16699 12C3.16699 16.8888 7.11123 20.833 12 20.833C16.8888 20.833 20.833 16.8888 20.833 12C20.833 7.11123 16.8888 3.16699 12 3.16699ZM12.333 5.83301V11.667H16.5V12.333H11.667V5.83301H12.333Z" fill="#51AF5E" stroke="#51AF5E"/>
                                                              </svg>
                                                            <p class="title">30 days</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:80%; background-color: #DF3F3F;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">30</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mas2_pct_r">
                                                    <div class="btn btn_yellow_global_arrow"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M14.0391 5.08594L12.9609 6.16406L18.0469 11.25H3V12.75H18.0469L12.9609 17.8359L14.0391 18.9141L20.4141 12.5391L20.9297 12L20.4141 11.4609L14.0391 5.08594Z"
                                                                fill="white" />
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mas2_plan_card">
                                            <div class="mas2_plan_card_top">
                                                <div class="mas2_pct_l"><img src="./img/brazil.svg" alt=""
                                                        class="img-fluid flaf_mas2">
                                                    <p class="mas2_flag_title">Brazil</p>
                                                </div>
                                                <div class="mas2_pct_r"><button
                                                        class="btn btn_yellow_global ms-auto me-0">Install eSIM</button>
                                                </div>
                                            </div>
                                            <div class="mas2_plan_card_bottom">
                                                <div class="mas2_plan_card_bottom_l">
                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" viewBox="0 0 16 16" fill="none">
                                                                <path
                                                                    d="M11.3333 2.66671L11.3333 13.3334M11.3333 13.3334L8.66667 10.6667M11.3333 13.3334L14 10.6667M4.66667 13.3334L4.66667 2.66671M4.66667 2.66671L2 5.33337M4.66667 2.66671L7.33333 5.33337"
                                                                    stroke="#47B147" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <p class="title">20&nbsp;GB</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:100%; background-color: #47B147;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">20&nbsp;GB</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                                                <path d="M12 2.5C17.2382 2.5 21.5 6.76182 21.5 12C21.5 17.2382 17.2382 21.5 12 21.5C6.76182 21.5 2.5 17.2382 2.5 12C2.5 6.76182 6.76182 2.5 12 2.5ZM12 3.16699C7.11123 3.16699 3.16699 7.11123 3.16699 12C3.16699 16.8888 7.11123 20.833 12 20.833C16.8888 20.833 20.833 16.8888 20.833 12C20.833 7.11123 16.8888 3.16699 12 3.16699ZM12.333 5.83301V11.667H16.5V12.333H11.667V5.83301H12.333Z" fill="#51AF5E" stroke="#51AF5E"/>
                                                              </svg>
                                                            <p class="title">30 days</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:80%; background-color: #DF3F3F;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">30</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mas2_pct_r">
                                                    <div class="btn btn_yellow_global_arrow"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M14.0391 5.08594L12.9609 6.16406L18.0469 11.25H3V12.75H18.0469L12.9609 17.8359L14.0391 18.9141L20.4141 12.5391L20.9297 12L20.4141 11.4609L14.0391 5.08594Z"
                                                                fill="white" />
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mas2_plan_card">
                                            <div class="mas2_plan_card_top">
                                                <div class="mas2_pct_l"><img src="./img/brazil.svg" alt=""
                                                        class="img-fluid flaf_mas2">
                                                    <p class="mas2_flag_title">Brazil</p>
                                                </div>
                                                <div class="mas2_pct_r"><button
                                                        class="btn btn_yellow_global ms-auto me-0">Install eSIM</button>
                                                </div>
                                            </div>
                                            <div class="mas2_plan_card_bottom">
                                                <div class="mas2_plan_card_bottom_l">
                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" viewBox="0 0 16 16" fill="none">
                                                                <path
                                                                    d="M11.3333 2.66671L11.3333 13.3334M11.3333 13.3334L8.66667 10.6667M11.3333 13.3334L14 10.6667M4.66667 13.3334L4.66667 2.66671M4.66667 2.66671L2 5.33337M4.66667 2.66671L7.33333 5.33337"
                                                                    stroke="#47B147" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <p class="title">20&nbsp;GB</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:100%; background-color: #47B147;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">20&nbsp;GB</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                                                <path d="M12 2.5C17.2382 2.5 21.5 6.76182 21.5 12C21.5 17.2382 17.2382 21.5 12 21.5C6.76182 21.5 2.5 17.2382 2.5 12C2.5 6.76182 6.76182 2.5 12 2.5ZM12 3.16699C7.11123 3.16699 3.16699 7.11123 3.16699 12C3.16699 16.8888 7.11123 20.833 12 20.833C16.8888 20.833 20.833 16.8888 20.833 12C20.833 7.11123 16.8888 3.16699 12 3.16699ZM12.333 5.83301V11.667H16.5V12.333H11.667V5.83301H12.333Z" fill="#51AF5E" stroke="#51AF5E"/>
                                                              </svg>
                                                            <p class="title">30 days</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:80%; background-color: #DF3F3F;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">30</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mas2_pct_r">
                                                    <div class="btn btn_yellow_global_arrow"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M14.0391 5.08594L12.9609 6.16406L18.0469 11.25H3V12.75H18.0469L12.9609 17.8359L14.0391 18.9141L20.4141 12.5391L20.9297 12L20.4141 11.4609L14.0391 5.08594Z"
                                                                fill="white" />
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mas2_plan_card">
                                            <div class="mas2_plan_card_top">
                                                <div class="mas2_pct_l"><img src="./img/brazil.svg" alt=""
                                                        class="img-fluid flaf_mas2">
                                                    <p class="mas2_flag_title">Brazil</p>
                                                </div>
                                                <div class="mas2_pct_r"><button
                                                        class="btn btn_yellow_global ms-auto me-0">Install eSIM</button>
                                                </div>
                                            </div>
                                            <div class="mas2_plan_card_bottom">
                                                <div class="mas2_plan_card_bottom_l">
                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" viewBox="0 0 16 16" fill="none">
                                                                <path
                                                                    d="M11.3333 2.66671L11.3333 13.3334M11.3333 13.3334L8.66667 10.6667M11.3333 13.3334L14 10.6667M4.66667 13.3334L4.66667 2.66671M4.66667 2.66671L2 5.33337M4.66667 2.66671L7.33333 5.33337"
                                                                    stroke="#47B147" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <p class="title">20&nbsp;GB</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:100%; background-color: #47B147;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">20&nbsp;GB</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                                                <path d="M12 2.5C17.2382 2.5 21.5 6.76182 21.5 12C21.5 17.2382 17.2382 21.5 12 21.5C6.76182 21.5 2.5 17.2382 2.5 12C2.5 6.76182 6.76182 2.5 12 2.5ZM12 3.16699C7.11123 3.16699 3.16699 7.11123 3.16699 12C3.16699 16.8888 7.11123 20.833 12 20.833C16.8888 20.833 20.833 16.8888 20.833 12C20.833 7.11123 16.8888 3.16699 12 3.16699ZM12.333 5.83301V11.667H16.5V12.333H11.667V5.83301H12.333Z" fill="#51AF5E" stroke="#51AF5E"/>
                                                              </svg>
                                                            <p class="title">30 days</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:80%; background-color: #DF3F3F;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">30</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mas2_pct_r">
                                                    <div class="btn btn_yellow_global_arrow"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M14.0391 5.08594L12.9609 6.16406L18.0469 11.25H3V12.75H18.0469L12.9609 17.8359L14.0391 18.9141L20.4141 12.5391L20.9297 12L20.4141 11.4609L14.0391 5.08594Z"
                                                                fill="white" />
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mas2_plan_card">
                                            <div class="mas2_plan_card_top">
                                                <div class="mas2_pct_l"><img src="./img/brazil.svg" alt=""
                                                        class="img-fluid flaf_mas2">
                                                    <p class="mas2_flag_title">Brazil</p>
                                                </div>
                                                <div class="mas2_pct_r"><button
                                                        class="btn btn_yellow_global ms-auto me-0">Install eSIM</button>
                                                </div>
                                            </div>
                                            <div class="mas2_plan_card_bottom">
                                                <div class="mas2_plan_card_bottom_l">
                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" viewBox="0 0 16 16" fill="none">
                                                                <path
                                                                    d="M11.3333 2.66671L11.3333 13.3334M11.3333 13.3334L8.66667 10.6667M11.3333 13.3334L14 10.6667M4.66667 13.3334L4.66667 2.66671M4.66667 2.66671L2 5.33337M4.66667 2.66671L7.33333 5.33337"
                                                                    stroke="#47B147" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <p class="title">20&nbsp;GB</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:100%; background-color: #47B147;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">20&nbsp;GB</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                                                <path d="M12 2.5C17.2382 2.5 21.5 6.76182 21.5 12C21.5 17.2382 17.2382 21.5 12 21.5C6.76182 21.5 2.5 17.2382 2.5 12C2.5 6.76182 6.76182 2.5 12 2.5ZM12 3.16699C7.11123 3.16699 3.16699 7.11123 3.16699 12C3.16699 16.8888 7.11123 20.833 12 20.833C16.8888 20.833 20.833 16.8888 20.833 12C20.833 7.11123 16.8888 3.16699 12 3.16699ZM12.333 5.83301V11.667H16.5V12.333H11.667V5.83301H12.333Z" fill="#51AF5E" stroke="#51AF5E"/>
                                                              </svg>
                                                            <p class="title">30 days</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:80%; background-color: #DF3F3F;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">30</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mas2_pct_r">
                                                    <div class="btn btn_yellow_global_arrow"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M14.0391 5.08594L12.9609 6.16406L18.0469 11.25H3V12.75H18.0469L12.9609 17.8359L14.0391 18.9141L20.4141 12.5391L20.9297 12L20.4141 11.4609L14.0391 5.08594Z"
                                                                fill="white" />
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tab-pane4" role="tabpanel"
                                    aria-labelledby="custom-tab-btn4" tabindex="0">
                                    <div class="scroll_card_outer">
                                        <div class="mas2_plan_card">
                                            <div class="mas2_plan_card_top">
                                                <div class="mas2_pct_l"><img src="./img/brazil.svg" alt=""
                                                        class="img-fluid flaf_mas2">
                                                    <p class="mas2_flag_title">Brazil</p>
                                                </div>
                                                <div class="mas2_pct_r"><button
                                                        class="btn btn_yellow_global ms-auto me-0">Install eSIM</button>
                                                </div>
                                            </div>
                                            <div class="mas2_plan_card_bottom">
                                                <div class="mas2_plan_card_bottom_l">
                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" viewBox="0 0 16 16" fill="none">
                                                                <path
                                                                    d="M11.3333 2.66671L11.3333 13.3334M11.3333 13.3334L8.66667 10.6667M11.3333 13.3334L14 10.6667M4.66667 13.3334L4.66667 2.66671M4.66667 2.66671L2 5.33337M4.66667 2.66671L7.33333 5.33337"
                                                                    stroke="#47B147" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <p class="title">20&nbsp;GB</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:100%; background-color: #47B147;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">20&nbsp;GB</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                                                <path d="M12 2.5C17.2382 2.5 21.5 6.76182 21.5 12C21.5 17.2382 17.2382 21.5 12 21.5C6.76182 21.5 2.5 17.2382 2.5 12C2.5 6.76182 6.76182 2.5 12 2.5ZM12 3.16699C7.11123 3.16699 3.16699 7.11123 3.16699 12C3.16699 16.8888 7.11123 20.833 12 20.833C16.8888 20.833 20.833 16.8888 20.833 12C20.833 7.11123 16.8888 3.16699 12 3.16699ZM12.333 5.83301V11.667H16.5V12.333H11.667V5.83301H12.333Z" fill="#51AF5E" stroke="#51AF5E"/>
                                                              </svg>
                                                            <p class="title">30 days</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:80%; background-color: #DF3F3F;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">30</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mas2_pct_r">
                                                    <div class="btn btn_yellow_global_arrow"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M14.0391 5.08594L12.9609 6.16406L18.0469 11.25H3V12.75H18.0469L12.9609 17.8359L14.0391 18.9141L20.4141 12.5391L20.9297 12L20.4141 11.4609L14.0391 5.08594Z"
                                                                fill="white" />
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mas2_plan_card">
                                            <div class="mas2_plan_card_top">
                                                <div class="mas2_pct_l"><img src="./img/brazil.svg" alt=""
                                                        class="img-fluid flaf_mas2">
                                                    <p class="mas2_flag_title">Brazil</p>
                                                </div>
                                                <div class="mas2_pct_r"><button
                                                        class="btn btn_yellow_global ms-auto me-0">Install eSIM</button>
                                                </div>
                                            </div>
                                            <div class="mas2_plan_card_bottom">
                                                <div class="mas2_plan_card_bottom_l">
                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" viewBox="0 0 16 16" fill="none">
                                                                <path
                                                                    d="M11.3333 2.66671L11.3333 13.3334M11.3333 13.3334L8.66667 10.6667M11.3333 13.3334L14 10.6667M4.66667 13.3334L4.66667 2.66671M4.66667 2.66671L2 5.33337M4.66667 2.66671L7.33333 5.33337"
                                                                    stroke="#47B147" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <p class="title">20&nbsp;GB</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:100%; background-color: #47B147;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">20&nbsp;GB</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                                                <path d="M12 2.5C17.2382 2.5 21.5 6.76182 21.5 12C21.5 17.2382 17.2382 21.5 12 21.5C6.76182 21.5 2.5 17.2382 2.5 12C2.5 6.76182 6.76182 2.5 12 2.5ZM12 3.16699C7.11123 3.16699 3.16699 7.11123 3.16699 12C3.16699 16.8888 7.11123 20.833 12 20.833C16.8888 20.833 20.833 16.8888 20.833 12C20.833 7.11123 16.8888 3.16699 12 3.16699ZM12.333 5.83301V11.667H16.5V12.333H11.667V5.83301H12.333Z" fill="#51AF5E" stroke="#51AF5E"/>
                                                              </svg>
                                                            <p class="title">30 days</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:80%; background-color: #DF3F3F;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">30</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mas2_pct_r">
                                                    <div class="btn btn_yellow_global_arrow"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M14.0391 5.08594L12.9609 6.16406L18.0469 11.25H3V12.75H18.0469L12.9609 17.8359L14.0391 18.9141L20.4141 12.5391L20.9297 12L20.4141 11.4609L14.0391 5.08594Z"
                                                                fill="white" />
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mas2_plan_card">
                                            <div class="mas2_plan_card_top">
                                                <div class="mas2_pct_l"><img src="./img/brazil.svg" alt=""
                                                        class="img-fluid flaf_mas2">
                                                    <p class="mas2_flag_title">Brazil</p>
                                                </div>
                                                <div class="mas2_pct_r"><button
                                                        class="btn btn_yellow_global ms-auto me-0">Install eSIM</button>
                                                </div>
                                            </div>
                                            <div class="mas2_plan_card_bottom">
                                                <div class="mas2_plan_card_bottom_l">
                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" viewBox="0 0 16 16" fill="none">
                                                                <path
                                                                    d="M11.3333 2.66671L11.3333 13.3334M11.3333 13.3334L8.66667 10.6667M11.3333 13.3334L14 10.6667M4.66667 13.3334L4.66667 2.66671M4.66667 2.66671L2 5.33337M4.66667 2.66671L7.33333 5.33337"
                                                                    stroke="#47B147" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <p class="title">20&nbsp;GB</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:100%; background-color: #47B147;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">20&nbsp;GB</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                                                <path d="M12 2.5C17.2382 2.5 21.5 6.76182 21.5 12C21.5 17.2382 17.2382 21.5 12 21.5C6.76182 21.5 2.5 17.2382 2.5 12C2.5 6.76182 6.76182 2.5 12 2.5ZM12 3.16699C7.11123 3.16699 3.16699 7.11123 3.16699 12C3.16699 16.8888 7.11123 20.833 12 20.833C16.8888 20.833 20.833 16.8888 20.833 12C20.833 7.11123 16.8888 3.16699 12 3.16699ZM12.333 5.83301V11.667H16.5V12.333H11.667V5.83301H12.333Z" fill="#51AF5E" stroke="#51AF5E"/>
                                                              </svg>
                                                            <p class="title">30 days</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:80%; background-color: #DF3F3F;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">30</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mas2_pct_r">
                                                    <div class="btn btn_yellow_global_arrow"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M14.0391 5.08594L12.9609 6.16406L18.0469 11.25H3V12.75H18.0469L12.9609 17.8359L14.0391 18.9141L20.4141 12.5391L20.9297 12L20.4141 11.4609L14.0391 5.08594Z"
                                                                fill="white" />
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mas2_plan_card">
                                            <div class="mas2_plan_card_top">
                                                <div class="mas2_pct_l"><img src="./img/brazil.svg" alt=""
                                                        class="img-fluid flaf_mas2">
                                                    <p class="mas2_flag_title">Brazil</p>
                                                </div>
                                                <div class="mas2_pct_r"><button
                                                        class="btn btn_yellow_global ms-auto me-0">Install eSIM</button>
                                                </div>
                                            </div>
                                            <div class="mas2_plan_card_bottom">
                                                <div class="mas2_plan_card_bottom_l">
                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" viewBox="0 0 16 16" fill="none">
                                                                <path
                                                                    d="M11.3333 2.66671L11.3333 13.3334M11.3333 13.3334L8.66667 10.6667M11.3333 13.3334L14 10.6667M4.66667 13.3334L4.66667 2.66671M4.66667 2.66671L2 5.33337M4.66667 2.66671L7.33333 5.33337"
                                                                    stroke="#47B147" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <p class="title">20&nbsp;GB</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:100%; background-color: #47B147;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">20&nbsp;GB</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                                                <path d="M12 2.5C17.2382 2.5 21.5 6.76182 21.5 12C21.5 17.2382 17.2382 21.5 12 21.5C6.76182 21.5 2.5 17.2382 2.5 12C2.5 6.76182 6.76182 2.5 12 2.5ZM12 3.16699C7.11123 3.16699 3.16699 7.11123 3.16699 12C3.16699 16.8888 7.11123 20.833 12 20.833C16.8888 20.833 20.833 16.8888 20.833 12C20.833 7.11123 16.8888 3.16699 12 3.16699ZM12.333 5.83301V11.667H16.5V12.333H11.667V5.83301H12.333Z" fill="#51AF5E" stroke="#51AF5E"/>
                                                              </svg>
                                                            <p class="title">30 days</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:80%; background-color: #DF3F3F;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">30</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mas2_pct_r">
                                                    <div class="btn btn_yellow_global_arrow"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M14.0391 5.08594L12.9609 6.16406L18.0469 11.25H3V12.75H18.0469L12.9609 17.8359L14.0391 18.9141L20.4141 12.5391L20.9297 12L20.4141 11.4609L14.0391 5.08594Z"
                                                                fill="white" />
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mas2_plan_card">
                                            <div class="mas2_plan_card_top">
                                                <div class="mas2_pct_l"><img src="./img/brazil.svg" alt=""
                                                        class="img-fluid flaf_mas2">
                                                    <p class="mas2_flag_title">Brazil</p>
                                                </div>
                                                <div class="mas2_pct_r"><button
                                                        class="btn btn_yellow_global ms-auto me-0">Install eSIM</button>
                                                </div>
                                            </div>
                                            <div class="mas2_plan_card_bottom">
                                                <div class="mas2_plan_card_bottom_l">
                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" viewBox="0 0 16 16" fill="none">
                                                                <path
                                                                    d="M11.3333 2.66671L11.3333 13.3334M11.3333 13.3334L8.66667 10.6667M11.3333 13.3334L14 10.6667M4.66667 13.3334L4.66667 2.66671M4.66667 2.66671L2 5.33337M4.66667 2.66671L7.33333 5.33337"
                                                                    stroke="#47B147" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>
                                                            <p class="title">20&nbsp;GB</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:100%; background-color: #47B147;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">20&nbsp;GB</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="stat-box">
                                                        <div class="stat-header">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                                                <path d="M12 2.5C17.2382 2.5 21.5 6.76182 21.5 12C21.5 17.2382 17.2382 21.5 12 21.5C6.76182 21.5 2.5 17.2382 2.5 12C2.5 6.76182 6.76182 2.5 12 2.5ZM12 3.16699C7.11123 3.16699 3.16699 7.11123 3.16699 12C3.16699 16.8888 7.11123 20.833 12 20.833C16.8888 20.833 20.833 16.8888 20.833 12C20.833 7.11123 16.8888 3.16699 12 3.16699ZM12.333 5.83301V11.667H16.5V12.333H11.667V5.83301H12.333Z" fill="#51AF5E" stroke="#51AF5E"/>
                                                              </svg>
                                                            <p class="title">30 days</p>
                                                        </div>

                                                        <div class="progress-row">
                                                            <div class="progress-bar">
                                                                <div class="progress-fill"
                                                                    style="width:80%; background-color: #DF3F3F;height: 100%;border-radius: 4px;">
                                                                </div>
                                                            </div>
                                                            <div class="pro_val_div">
                                                                <p class="progress-value">30</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mas2_pct_r">
                                                    <div class="btn btn_yellow_global_arrow"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M14.0391 5.08594L12.9609 6.16406L18.0469 11.25H3V12.75H18.0469L12.9609 17.8359L14.0391 18.9141L20.4141 12.5391L20.9297 12L20.4141 11.4609L14.0391 5.08594Z"
                                                                fill="white" />
                                                        </svg></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="desktop_none">
                            <div class="tirthqak_pagination ">
                                <div class="pag_div">
                                    <p>PREV.  </p>
                                </div>
                                <div class="pag_div">
                                    <p>1    </p>
                                </div>
                                <div class="pag_div pag_div_active">
                                    <p>2    </p>
                                </div>
                                <div class="pag_div">
                                    <p>3    </p>
                                </div>
                                <div class="pag_div">
                                    <p>...    </p>
                                </div>
                                <div class="pag_div">
                                    <p>12   </p>
                                </div>
        
                                <div class="pag_div for_next">
                                    <p>Next   </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </Maindiv>







        <?php include 'includes/footer.php'; ?>







<script>
    function passwordEye(e, inpId) {
        const input = document.querySelector(`#${inpId}`);
        const img = e.target;
        const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
        input.setAttribute('type', type);

        if (img.src.includes("ic.svg")) {
            img.src = img.src.replace("ic.svg", "io.svg");
        } else {
            img.src = img.src.replace("io.svg", "ic.svg");
        }
    }
</script>