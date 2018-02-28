    <div class="eims_soft_head">
                <div class="logo_soft_div left">
                    <!--<img src="images/dreams_logo_text" />-->
                    <h1><img src="images/logo.png" style="margin-left:-33px; margin-top:4px;" /></h1>
                    
                </div>
                <div class="logo_soft_menu_div right">
                    <ul>
                        <li class="right">
                            <a href="logout.php">
                                <img class="left" src="images/Logout_icon_small.png" />
                                <div class="right css_btn_class">Log out</div>
                            </a>
                        </li>
                        <li class="right">
                            <a href="manu_page.php">
                                <img class="left" src="images/setting_icon_small.png" />
                                <div class="right css_btn_class">User Settings</div>
                            </a>
                        </li>
                        <li class="right">
                            <a href="#">
                                <img class="left" src="images/message_icon.png" />
                                <div class="right css_btn_class">Message (<?php echo $ops->sms_available($school); ?>)</div>
                            </a>
                        </li>
                    </ul>
                    <div class=" input_div right" style=" margin-top:20px;">
                        <a href="#" >
                            <img class=" input_img right" src="images/search.png" style=" margin-top:-9px;"/>
                            <input placeholder="Search" class="textbox"type="text"> 
                        </a>
                    </div>
                </div>
                <div class="logo_soft_main_menu_div left" style=" margin-top:60px;">
                    <!--nav Menu Start From Here-->
                    <ul id="nav">
                        <li class="current"><a href="homepage.php">Home</a></li>
                        <li><a href="attendance_doc.php">Website CMS</a>
                            <ul>
                                <li><a href="slider.php"> Home Slider </a></li>
                                <li><a href="cms_welcome_message.php">Welcome Message</a></li>
                                <li><a href="#">About us</a>
                                	<ul>
                                        <li><a href="cms_history.php">History</a></li>
                                        <li><a href="cms_mission.php">Mission</a></li>
                                        <li><a href="cms_vission.php">Vission</a></li>
                                    </ul>
                                </li>
                                <li><a href="cms_quicklink.php">Quick Link</a></li>
                                <li><a href="notice_list.php">Notice</a>
                                	 <ul>
                                        <li><a href="create_notice.php">Student Notice</a></li>
                                        <li><a href="create_teacher_notice.php">Teacher Notice</a></li>
                                        <li><a href="cms_admission_info.php">Admission Info (<?php echo date('Y'); ?>)</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Key Person</a>
                                	<ul>
                                        <li><a href="cms_keyperson_chairman.php">Chairman Message</a></li>
                                        <li><a href="cms_keyperson_managing_committee.php">Managing Committee</a></li>
                                        <li><a href="cms_keyperson_principle.php">Principal Message</a></li>
                                        <li><a href="cms_keyperson_teacher.php">Teachers List</a></li>
                                        <li><a href="cms_keyperson_staff.php">Office Staff</a></li>
                                    </ul>
                                </li>
                                <li><a href="cms_event_photo.php">Academic Gallery</a>
                                	<ul>
                                        <li><a href="cms_event.php">Add New Event</a></li>
                                        <li><a href="cms_event_photo.php">Add Photo In Event</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Students</a>
                            <ul>
                                <li><a href="st_detail1.php">Add Student</a></li>
                                <li><a href="add_student_from_excel.php">Add Student From Excel</a></li>
                                <li><a href="student_list.php">Student List</a></li>
                                <li><a href="student_promote.php">Promote to Next Class</a></li>
                                <li><a href="promot_class_list.php">Promote Class List</a></li>
                                <li><a href="st_total_statistics.php">Student Statistics</a></li>
                                <li><a href="all_student_list.php">All Student List</a></li>
                            </ul>
                        </li>
                        <!--<li><a href="attendance_doc.php">Attendance</a>
                            <ul>
                                <li><a href="attendance_reg.php">Attendance Register</a></li>
                                <li><a href="attendance_report.php">Attendance Report</a></li>
                            </ul>
                        </li>-->
                        <li><a href="#">Manage Group</a>
                        <ul>
                                <li><a href="st_group.php">Create a Group</a></li>
                                <li><a href="category.php">Add Manage Category</a></li>
                                <li><a href="group_list.php">Group List</a></li>
                                
                                <li><a href="add_a_contact.php">Add a Contact</a></li>
                                <li><a href="add_all_contact_using_excel.php">Add Contact From Excel</a></li>
                                <li><a href="contact_list.php">Contact List</a></li>
                                <li><a href="all_group_contact_list.php">All Contact List</a></li>
                            </ul>
                        </li>
                        <li><a href="#">SMS</a>
                        <ul>
                                <li><a href="sms_to_class_wise.php">SMS to Class</a></li>
                                <li><a href="sms_to_attendance.php">SMS to Attendance</a></li>
                                <li><a href="sms_to_result.php">SMS to Result</a></li>
                                <li><a href="sms_to_guardian.php">SMS to Guardian</a></li>
                                <li><a href="sms_to_all_students.php">SMS to All Students</a></li>
                                <li><a href="sms_to_group.php">SMS to Group</a></li>
                                <li><a href="all_manage_sms.php">SMS to All Manage Group</a></li>
                                <li><a href="sms_to_all.php">Send SMS to All</a></li>
                            </ul>
                        </li>
                        <li><a href="#">More</a>
                        <ul>
                                
                                <li><a href="academic_calendar.php">Academic Calendar  </a></li>
                                <li><a href="book_list.php">Massages Book</a></li>
                                <li><a href="transfar_cf.php">Transfer Certificate</a></li>
                                <li><a href="testimonial_0.php">Testimonial</a></li>
                                
                            </ul>
                        </li>
                        <li><a href="#">Settings</a>
                        <ul>
                                <li><a href="st_list_setting.php">Settings to Students List</a></li>
                                <li><a href="group_list_setting.php">Settings to Group List</a></li>
                                <li><a href="contact_list_stng.php">Settings to Contact List</a></li>
                                <li><a href="academic_calendar_sting.php">Settings to Academic Calendar</a></li>
                                <!--<li><a href="time_table_deging.php">Settings to Time table</a></li>-->
                                <li><a href="book.php">Settings to SMS Book</a></li>
                                
                                <li><a href="">System Configurations </a>
                        <ul>
                            <li><a href="add_session.php">Add Session</a></li>
                                <li><a href="add_class.php">Add Class</a></li>
                                <li><a href="add_section.php">Add Section</a></li>
                                <li><a href="add_shift.php">Add Shift</a></li>
                                <li><a href="add_group.php">Add Student Group</a></li>
                                
                                <li><a href="add_subject.php">Add Subject</a></li>
                                <li><a href="add_exam_category.php">Add Examination</a></li>
                                <li><a href="annual_finalexam.php">Add Annual/Final Exam</a></li>
                                
                                <li><a href="finnace.php">Add Student Finance</a>
                                <li><a href="stationery.php">Add Stationery Finance</a>
                                <li><a href="add_finance_manage.php">Add Managmant Finance</a>
                                 <!--<li><a href="grading_system.php">Add Grading System </a>
                                <li><a href="grading_system_all.php">Grading System ALL </a>
                               <li><a href="edit_marks_mode.php">Edit Mark's Mode</a>-->
                      </ul>
                                </li>
                          </ul>
                        </li>
                    </ul>
                    
                    <div class=" input_div right " style=" margin-top:-6px; line-height:40px;">
                    <button class="css_button">
                    	EIMS Messenger
                        
                    </button>
                    </div>
                    
                </div>
            </div>