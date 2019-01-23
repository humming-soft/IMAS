'use strict';
var App = function () {
      var _splashLoader = function(Splash) {
        $('form').submit(function() {
            if (!$(this).hasClass('no-loader')) {
                Splash.fadeIn('slow');
            }
        });
        $('a').click(function() {
            if (($(this).attr('href') != '#')) {
                if($(this).attr('href') != undefined) {
                    if (!$(this).hasClass('no-loader')) {
                        Splash.fadeIn('slow');
                    }
                }
            }
        });
        $(document).on("click", ".add-loader", function(){
            Splash.fadeIn('slow');
        });

        $(window).bind("pageshow", function(event) {
            Splash.fadeOut('slow');
        });
      };

      var _is_display_type = function(display_type) {
        return $('.display-type').css('content') == display_type || $('.display-type').css('content') == '"' + display_type + '"';
      };

      var _not_display_type = function(display_type) {
        return $('.display-type').css('content') != display_type && $('.display-type').css('content') != '"' + display_type + '"';
      };

      var _os_init_sub_menus = function() {

        // INIT MENU TO ACTIVATE ON HOVER
        var menu_timer;
        $('.menu-activated-on-hover').on('mouseenter', 'ul.main-menu > li.has-sub-menu', function () {
          var $elem = $(this);
          clearTimeout(menu_timer);
          $elem.closest('ul').addClass('has-active').find('> li').removeClass('active');
          $elem.addClass('active');
        });
      
        $('.menu-activated-on-hover').on('mouseleave', 'ul.main-menu > li.has-sub-menu', function () {
          var $elem = $(this);
          menu_timer = setTimeout(function () {
            $elem.removeClass('active').closest('ul').removeClass('has-active');
          }, 30);
        });
      
        // INIT MENU TO ACTIVATE ON CLICK
        $('.menu-activated-on-click').on('click', 'li.has-sub-menu > a', function (event) {
          var $elem = $(this).closest('li');
          if ($elem.hasClass('active')) {
            $elem.removeClass('active');
          } else {
            $elem.closest('ul').find('li.active').removeClass('active');
            $elem.addClass('active');
          }
          return false;
        });
      };


        // #1. CHAT APP
      var _initChatApp = function(){
        $('.floated-chat-btn, .floated-chat-w .chat-close').on('click', function () {
          $('.floated-chat-w').toggleClass('active');
          return false;
        });

        $('.message-input').on('keypress', function (e) {
          if (e.which == 13) {
            $('.chat-messages').append('<div class="message self"><div class="message-content">' + $(this).val() + '</div></div>');
            $(this).val('');
            var $messages_w = $('.floated-chat-w .chat-messages');
            $messages_w.scrollTop($messages_w.prop("scrollHeight"));
            $messages_w.perfectScrollbar('update');
            return false;
          }
        });

        $('.floated-chat-w .chat-messages').perfectScrollbar();
      };


      // #2. CALENDAR INIT
      var _InitCalendar = function(){
          if ($("#fullCalendar").length) {
              var calendar, d, date, m, y;

              date = new Date();

              d = date.getDate();

              m = date.getMonth();

              y = date.getFullYear();

              calendar = $("#fullCalendar").fullCalendar({
                header: {
                  left: "prev,next today",
                  center: "title",
                  right: "month,agendaWeek,agendaDay"
                },
                selectable: true,
                selectHelper: true,
                select: function select(start, end, allDay) {
                  var title;
                  title = prompt("Event Title:");
                  if (title) {
                    calendar.fullCalendar("renderEvent", {
                      title: title,
                      start: start,
                      end: end,
                      allDay: allDay
                    }, true);
                  }
                  return calendar.fullCalendar("unselect");
                },
                editable: true,
                events: [{
                  title: "Long Event",
                  start: new Date(y, m, 3, 12, 0),
                  end: new Date(y, m, 7, 14, 0)
                }, {
                  title: "Lunch",
                  start: new Date(y, m, d, 12, 0),
                  end: new Date(y, m, d + 2, 14, 0),
                  allDay: false
                }, {
                  title: "Click for Google",
                  start: new Date(y, m, 28),
                  end: new Date(y, m, 29),
                  url: "http://google.com/"
                }]
              });
        }
      };


       // #3. FORM VALIDATION
      var _formValidation = function(){
        if ($('#formValidate').length) {
          $('#formValidate').validator();
        }
      };

      // #4. DATE RANGE PICKER
      var _dateRangePicker = function(){
        $('input.single-daterange').daterangepicker({ "singleDatePicker": true });
        $('input.multi-daterange').daterangepicker({ "startDate": "03/28/2017", "endDate": "04/06/2017" });
      };

      // #5. DATATABLES
      var _dataTable = function(){
        if ($('#dataTable1').length) {
          $('#dataTable1').DataTable({ buttons: ['copy', 'excel', 'pdf'] });
        }
      };
      // #6. EDITABLE TABLES
      var _editableTables = function(){
        if ($('#editableTable').length) {
          $('#editableTable').editableTableWidget();
        }
      };

      // #7. FORM STEPS FUNCTIONALITY
      var _formWizard = function(){
        $('.step-trigger-btn').on('click', function () {
          var btn_href = $(this).attr('href');
          $('.step-trigger[href="' + btn_href + '"]').click();
          return false;
        });

        // FORM STEP CLICK
        $('.step-trigger').on('click', function () {
          var prev_trigger = $(this).prev('.step-trigger');
          if (prev_trigger.length && !prev_trigger.hasClass('active') && !prev_trigger.hasClass('complete')) return false;
          var content_id = $(this).attr('href');
          $(this).closest('.step-triggers').find('.step-trigger').removeClass('active');
          $(this).prev('.step-trigger').addClass('complete');
          $(this).addClass('active');
          $('.step-content').removeClass('active');
          $('.step-content' + content_id).addClass('active');
          return false;
        });
      };

      // #8. SELECT 2 ACTIVATION
      var _select2 = function(){
        if ($('.select2').length) {
          $('.select2').select2();
        }
      };

      // #9. CKEDITOR ACTIVATION
      var _ckeditor = function(){
        if ($('#ckeditor1').length) {
          CKEDITOR.replace('ckeditor1');
        }
      };

      // #10. CHARTJS CHARTS
      var _visualization= function(){
        if (typeof Chart !== 'undefined') {

          var fontFamily = '"Proxima Nova W01", -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif';
          // set defaults
          Chart.defaults.global.defaultFontFamily = fontFamily;
          Chart.defaults.global.tooltips.titleFontSize = 14;
          Chart.defaults.global.tooltips.titleMarginBottom = 4;
          Chart.defaults.global.tooltips.displayColors = false;
          Chart.defaults.global.tooltips.bodyFontSize = 12;
          Chart.defaults.global.tooltips.xPadding = 10;
          Chart.defaults.global.tooltips.yPadding = 8;

          // init lite line chart if element exists

          if ($("#liteLineChart").length) {
            var liteLineChart = $("#liteLineChart");

            var liteLineGradient = liteLineChart[0].getContext('2d').createLinearGradient(0, 0, 0, 200);
            liteLineGradient.addColorStop(0, 'rgba(30,22,170,0.08)');
            liteLineGradient.addColorStop(1, 'rgba(30,22,170,0)');

            var chartData = [13, 28, 19, 24, 43, 49];

            if (liteLineChart.data('chart-data')) chartData = liteLineChart.data('chart-data').split(',');

            // line chart data
            var liteLineData = {
              labels: ["January 1", "January 5", "January 10", "January 15", "January 20", "January 25"],
              datasets: [{
                label: "Sold",
                fill: true,
                lineTension: 0.4,
                backgroundColor: liteLineGradient,
                borderColor: "#8f1cad",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "#fff",
                pointBackgroundColor: "#2a2f37",
                pointBorderWidth: 2,
                pointHoverRadius: 6,
                pointHoverBackgroundColor: "#FC2055",
                pointHoverBorderColor: "#fff",
                pointHoverBorderWidth: 2,
                pointRadius: 4,
                pointHitRadius: 5,
                data: chartData,
                spanGaps: false
              }]
            };

            // line chart init
            var myLiteLineChart = new Chart(liteLineChart, {
              type: 'line',
              data: liteLineData,
              options: {
                legend: {
                  display: false
                },
                scales: {
                  xAxes: [{
                    display: false,
                    ticks: {
                      fontSize: '11',
                      fontColor: '#969da5'
                    },
                    gridLines: {
                      color: 'rgba(0,0,0,0.0)',
                      zeroLineColor: 'rgba(0,0,0,0.0)'
                    }
                  }],
                  yAxes: [{
                    display: false,
                    ticks: {
                      beginAtZero: true,
                      max: 55
                    }
                  }]
                }
              }
            });
          }

          // init lite line chart V2 if element exists

          if ($("#liteLineChartV2").length) {
            var liteLineChartV2 = $("#liteLineChartV2");

            var liteLineGradientV2 = liteLineChartV2[0].getContext('2d').createLinearGradient(0, 0, 0, 100);
            liteLineGradientV2.addColorStop(0, 'rgba(40,97,245,0.1)');
            liteLineGradientV2.addColorStop(1, 'rgba(40,97,245,0)');

            var chartDataV2 = [13, 28, 19, 24, 43, 49, 40, 35, 42, 46];

            if (liteLineChartV2.data('chart-data')) chartDataV2 = liteLineChartV2.data('chart-data').split(',');

            // line chart data
            var liteLineDataV2 = {
              labels: ["1", "3", "6", "9", "12", "15", "18", "21", "24", "27"],
              datasets: [{
                label: "Balance",
                fill: true,
                lineTension: 0.35,
                backgroundColor: liteLineGradientV2,
                borderColor: "#2861f5",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "#2861f5",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 2,
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "#FC2055",
                pointHoverBorderColor: "#fff",
                pointHoverBorderWidth: 2,
                pointRadius: 3,
                pointHitRadius: 10,
                data: chartDataV2,
                spanGaps: false
              }]
            };

            // line chart init
            var myLiteLineChartV2 = new Chart(liteLineChartV2, {
              type: 'line',
              data: liteLineDataV2,
              options: {
                legend: {
                  display: false
                },
                scales: {
                  xAxes: [{
                    ticks: {
                      fontSize: '10',
                      fontColor: '#969da5'
                    },
                    gridLines: {
                      color: 'rgba(0,0,0,0.0)',
                      zeroLineColor: 'rgba(0,0,0,0.0)'
                    }
                  }],
                  yAxes: [{
                    display: false,
                    ticks: {
                      beginAtZero: true,
                      max: 55
                    }
                  }]
                }
              }
            });
          }

          // init lite line chart V2 if element exists

          if ($("#liteLineChartV3").length) {
            var liteLineChartV3 = $("#liteLineChartV3");

            var liteLineGradientV3 = liteLineChartV3[0].getContext('2d').createLinearGradient(0, 0, 0, 70);
            liteLineGradientV3.addColorStop(0, 'rgba(40,97,245,0.2)');
            liteLineGradientV3.addColorStop(1, 'rgba(40,97,245,0)');

            var chartDataV3 = [13, 28, 19, 24, 43, 49, 40, 35, 42, 46, 38];

            if (liteLineChartV3.data('chart-data')) chartDataV3 = liteLineChartV3.data('chart-data').split(',');

            // line chart data
            var liteLineDataV3 = {
              labels: ["", "FEB", "", "MAR", "", "APR", "", "MAY", "", "JUN", "", "JUL", ""],
              datasets: [{
                label: "Balance",
                fill: true,
                lineTension: 0.15,
                backgroundColor: liteLineGradientV3,
                borderColor: "#2861f5",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "#2861f5",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 2,
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "#FC2055",
                pointHoverBorderColor: "#fff",
                pointHoverBorderWidth: 0,
                pointRadius: 0,
                pointHitRadius: 10,
                data: chartDataV3,
                spanGaps: false
              }]
            };

            // line chart init
            var myLiteLineChartV3 = new Chart(liteLineChartV3, {
              type: 'line',
              data: liteLineDataV3,
              options: {
                legend: {
                  display: false
                },
                scales: {
                  xAxes: [{
                    ticks: {
                      fontSize: '10',
                      fontColor: '#969da5'
                    },
                    gridLines: {
                      color: 'rgba(0,0,0,0.0)',
                      zeroLineColor: 'rgba(0,0,0,0.0)'
                    }
                  }],
                  yAxes: [{
                    display: false,
                    ticks: {
                      beginAtZero: true,
                      max: 55
                    }
                  }]
                }
              }
            });
          }

          // init line chart if element exists
          if ($("#lineChart").length) {
            var lineChart = $("#lineChart");

            // line chart data
            var lineData = {
              labels: ["1", "5", "10", "15", "20", "25", "30", "35"],
              datasets: [{
                label: "Visitors Graph",
                fill: false,
                lineTension: 0.3,
                backgroundColor: "#fff",
                borderColor: "#047bf8",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "#fff",
                pointBackgroundColor: "#141E41",
                pointBorderWidth: 3,
                pointHoverRadius: 10,
                pointHoverBackgroundColor: "#FC2055",
                pointHoverBorderColor: "#fff",
                pointHoverBorderWidth: 3,
                pointRadius: 5,
                pointHitRadius: 10,
                data: [27, 20, 44, 24, 29, 22, 43, 52],
                spanGaps: false
              }]
            };

            // line chart init
            var myLineChart = new Chart(lineChart, {
              type: 'line',
              data: lineData,
              options: {
                legend: {
                  display: false
                },
                scales: {
                  xAxes: [{
                    ticks: {
                      fontSize: '11',
                      fontColor: '#969da5'
                    },
                    gridLines: {
                      color: 'rgba(0,0,0,0.05)',
                      zeroLineColor: 'rgba(0,0,0,0.05)'
                    }
                  }],
                  yAxes: [{
                    display: false,
                    ticks: {
                      beginAtZero: true,
                      max: 65
                    }
                  }]
                }
              }
            });
          }

          // init donut chart if element exists
          if ($("#barChart1").length) {
            var barChart1 = $("#barChart1");
            var barData1 = {
              labels: ["January", "February", "March", "April", "May", "June"],
              datasets: [{
                label: "My First dataset",
                backgroundColor: ["#5797FC", "#629FFF", "#6BA4FE", "#74AAFF", "#7AAEFF", '#85B4FF'],
                borderColor: ['rgba(255,99,132,0)', 'rgba(54, 162, 235, 0)', 'rgba(255, 206, 86, 0)', 'rgba(75, 192, 192, 0)', 'rgba(153, 102, 255, 0)', 'rgba(255, 159, 64, 0)'],
                borderWidth: 1,
                data: [24, 42, 18, 34, 56, 28]
              }]
            };
            // -----------------
            // init bar chart
            // -----------------
            new Chart(barChart1, {
              type: 'bar',
              data: barData1,
              options: {
                scales: {
                  xAxes: [{
                    display: false,
                    ticks: {
                      fontSize: '11',
                      fontColor: '#969da5'
                    },
                    gridLines: {
                      color: 'rgba(0,0,0,0.05)',
                      zeroLineColor: 'rgba(0,0,0,0.05)'
                    }
                  }],
                  yAxes: [{
                    ticks: {
                      beginAtZero: true
                    },
                    gridLines: {
                      color: 'rgba(0,0,0,0.05)',
                      zeroLineColor: '#6896f9'
                    }
                  }]
                },
                legend: {
                  display: false
                },
                animation: {
                  animateScale: true
                }
              }
            });
          }

          // init pie chart if element exists
          if ($("#pieChart1").length) {
            var pieChart1 = $("#pieChart1");

            // pie chart data
            var pieData1 = {
              labels: ["Completed","Remaining"],
              datasets: [{
                data: [70,30],
                backgroundColor: ["#5797fc", "#7e6fff"],
                hoverBackgroundColor: ["#5797fc", "#7e6fff"],
                borderWidth: 0
              }]
            };

            // -----------------
            // init pie chart
            // -----------------
            new Chart(pieChart1, {
              type: 'pie',
              data: pieData1,
              options: {
                legend: {
                  position: 'bottom',
                  labels: {
                    boxWidth: 15,
                    fontColor: '#3e4b5b'
                  }
                },
                animation: {
                  animateScale: true
                }
              }
            });
          }

          // -----------------
          // init donut chart if element exists
          // -----------------
          if ($("#donutChart").length) {
            var donutChart = $("#donutChart");

            // donut chart data
            var data = {
              labels: ["Red", "Blue", "Yellow", "Green", "Purple"],
              datasets: [{
                data: [300, 50, 100, 30, 70],
                backgroundColor: ["#5797fc", "#7e6fff", "#4ecc48", "#ffcc29", "#f37070"],
                hoverBackgroundColor: ["#5797fc", "#7e6fff", "#4ecc48", "#ffcc29", "#f37070"],
                borderWidth: 0
              }]
            };

            // -----------------
            // init donut chart
            // -----------------
            new Chart(donutChart, {
              type: 'doughnut',
              data: data,
              options: {
                legend: {
                  display: false
                },
                animation: {
                  animateScale: true
                },
                cutoutPercentage: 80
              }
            });
          }

          // -----------------
          // init donut chart if element exists
          // -----------------
          if ($("#donutChart1").length) {
            var donutChart1 = $("#donutChart1");

            // donut chart data
            var data1 = {
              labels: ["Completed","Remaining"],
              datasets: [{
                data: [70,30],
                backgroundColor: ["#4ecc48",  "#f37070"],
                hoverBackgroundColor: ["#4ecc48", "#f37070"],
                borderWidth: 6,
                hoverBorderColor: 'transparent'
              }]
            };

            // -----------------
            // init donut chart
            // -----------------
            new Chart(donutChart1, {
              type: 'doughnut',
              data: data1,
              options: {
                legend: {
                  display: false
                },
                animation: {
                  animateScale: true
                },
                cutoutPercentage: 80
              }
            });
          }
        }
      };

       // #11. MENU RELATED STUFF
      var _initMenu = function(){
       // INIT MOBILE MENU TRIGGER BUTTON
        $('.mobile-menu-trigger').on('click', function () {
          $('.menu-mobile .menu-and-user').slideToggle(200, 'swing');
          return false;
        });

        _os_init_sub_menus();
      };

      // #12. CONTENT SIDE PANEL TOGGLER
      var _cpanelTrigger = function(){
        $('.content-panel-toggler, .content-panel-close, .content-panel-open').on('click', function () {
          $('.all-wrapper').toggleClass('content-panel-active');
        });
      };

      var _cpanelToggler = function(){
        $('.content-panel-hide').on('click', function () {
          $('.all-wrapper').addClass('content-panel-hidden');
        });
        $('.content-panel-view').on('click', function () {
          $('.all-wrapper').removeClass('content-panel-hidden');
        });
      };


      // #13. EMAIL APP 
      var _emailApp = function(){
        $('.more-messages').on('click', function () {
          $(this).hide();
          $('.older-pack').slideDown(100);
          $('.aec-full-message-w.show-pack').removeClass('show-pack');
          return false;
        });

        $('.ae-list').perfectScrollbar({ wheelPropagation: true });

        $('.ae-list .ae-item').on('click', function () {
          $('.ae-item.active').removeClass('active');
          $(this).addClass('active');
          return false;
        });

        // CKEDITOR ACTIVATION FOR MAIL REPLY
        if (typeof CKEDITOR !== 'undefined') {
          CKEDITOR.disableAutoInline = true;
          if ($('#ckeditorEmail').length) {
            CKEDITOR.config.uiColor = '#ffffff';
            CKEDITOR.config.toolbar = [['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink', '-', 'About']];
            CKEDITOR.config.height = 110;
            CKEDITOR.replace('ckeditor1');
          }
        }

        // EMAIL SIDEBAR MENU TOGGLER
        $('.ae-side-menu-toggler').on('click', function () {
          $('.app-email-w').toggleClass('compact-side-menu');
        });

        // EMAIL MOBILE SHOW MESSAGE
        $('.ae-item').on('click', function () {
          $('.app-email-w').addClass('forse-show-content');
        });

        if ($('.app-email-w').length) {
          if (_is_display_type('phone') || _is_display_type('tablet')) {
            $('.app-email-w').addClass('compact-side-menu');
          }
        }
      };

      // #14. FULL CHAT APP
      var _fullChatApp = function(){
        function add_full_chat_message($input) {
          $('.chat-content').append('<div class="chat-message self"><div class="chat-message-content-w"><div class="chat-message-content">' + $input.val() + '</div></div><div class="chat-message-date">1:23pm</div><div class="chat-message-avatar"><img alt="" src="img/avatar1.jpg"></div></div>');
          $input.val('');
          var $messages_w = $('.chat-content-w');
          $messages_w.scrollTop($messages_w[0].scrollHeight);
        }

        $('.chat-btn a').on('click', function () {
          add_full_chat_message($('.chat-input input'));
          return false;
        });
        $('.chat-input input').on('keypress', function (e) {
          if (e.which == 13) {
            add_full_chat_message($(this));
            return false;
          }
        });
      };

      // #15. CRM PIPELINE
      var _crmPipeline = function(){
        if ($('.pipeline').length) {
          // INIT DRAG AND DROP FOR PIPELINE ITEMS
          var dragulaObj = dragula($('.pipeline-body').toArray(), {}).on('drag', function () {}).on('drop', function (el) {}).on('over', function (el, container) {
            $(container).closest('.pipeline-body').addClass('over');
          }).on('out', function (el, container, source) {

            var new_pipeline_body = $(container).closest('.pipeline-body');
            new_pipeline_body.removeClass('over');
            var old_pipeline_body = $(source).closest('.pipeline-body');
          });
        }
      };

      // #16. OUR OWN CUSTOM DROPDOWNS 
      var _dropDowns = function(){
        $('.os-dropdown-trigger').on('mouseenter', function () {
          $(this).addClass('over');
        });
        $('.os-dropdown-trigger').on('mouseleave', function () {
          $(this).removeClass('over');
        });
      };

      // #17. BOOTSTRAP RELATED JS ACTIVATIONS
      var _initTooltip = function(){
        $('[data-toggle="tooltip"]').tooltip();
      };
      var _initPopover= function(){
        $('[data-toggle="popover"]').popover();
      };

      // #18. TODO Application
      var _todoApp = function(){
              // Tasks foldable trigger
              $('.tasks-header-toggler').on('click', function () {
                $(this).closest('.tasks-section').find('.tasks-list-w').slideToggle(100);
                return false;
              });

              // Sidebar Sections foldable trigger
              $('.todo-sidebar-section-toggle').on('click', function () {
                $(this).closest('.todo-sidebar-section').find('.todo-sidebar-section-contents').slideToggle(100);
                return false;
              });

              // Sidebar Sub Sections foldable trigger
              $('.todo-sidebar-section-sub-section-toggler').on('click', function () {
                $(this).closest('.todo-sidebar-section-sub-section').find('.todo-sidebar-section-sub-section-content').slideToggle(100);
                return false;
              });

              // Drag init
              if ($('.tasks-list').length) {
                // INIT DRAG AND DROP FOR Todo Tasks
                var dragulaTasksObj = dragula($('.tasks-list').toArray(), {
                  moves: function moves(el, container, handle) {
                    return handle.classList.contains('drag-handle');
                  }
                }).on('drag', function () {}).on('drop', function (el) {}).on('over', function (el, container) {
                  $(container).closest('.tasks-list').addClass('over');
                }).on('out', function (el, container, source) {

                  var new_pipeline_body = $(container).closest('.tasks-list');
                  new_pipeline_body.removeClass('over');
                  var old_pipeline_body = $(source).closest('.tasks-list');
                });
              }

              // Task actions init

              // Complete/Done
              $('.task-btn-done').on('click', function () {
                $(this).closest('.draggable-task').toggleClass('complete');
                return false;
              });

              // Favorite/star
              $('.task-btn-star').on('click', function () {
                $(this).closest('.draggable-task').toggleClass('favorite');
                return false;
              });

              // Delete
              var timeoutDeleteTask;
              $('.task-btn-delete').on('click', function () {
                if (confirm('Are you sure you want to delete this task?')) {
                  var $task_to_remove = $(this).closest('.draggable-task');
                  $task_to_remove.addClass('pre-removed');
                  $task_to_remove.append('<a href="#" class="task-btn-undelete">Undo Delete</a>');
                  timeoutDeleteTask = setTimeout(function () {
                    $task_to_remove.slideUp(300, function () {
                      $(this).remove();
                    });
                  }, 5000);
                }
                return false;
              });

              $('.tasks-list').on('click', '.task-btn-undelete', function () {
                $(this).closest('.draggable-task').removeClass('pre-removed');
                $(this).remove();
                if (typeof timeoutDeleteTask !== 'undefined') {
                  clearTimeout(timeoutDeleteTask);
                }
                return false;
              });
      };


       // #19. Fancy Selector
       var _fancySelector = function(){
          $('.fs-selector-trigger').on('click', function () {
            $(this).closest('.fancy-selector-w').toggleClass('opened');
          });
        };

      // #20. SUPPORT SERVICE
      var _supportService = function(){
          $('.close-ticket-info').on('click', function () {
            $('.support-ticket-content-w').addClass('folded-info').removeClass('force-show-folded-info');
            return false;
          });

          $('.show-ticket-info').on('click', function () {
            $('.support-ticket-content-w').removeClass('folded-info').addClass('force-show-folded-info');
            return false;
          });

          $('.support-index .support-tickets .support-ticket').on('click', function () {
            $('.support-index').addClass('show-ticket-content');
            return false;
          });

          $('.support-index .back-to-index').on('click', function () {
            $('.support-index').removeClass('show-ticket-content');
            return false;
          });
      };

      // #21. Onboarding Screens Modal
      var _initModal = function(){
        $('.onboarding-modal.show-on-load').modal('show');
        if ($('.onboarding-modal .onboarding-slider-w').length) {
          $('.onboarding-modal .onboarding-slider-w').slick({
            dots: true,
            infinite: false,
            adaptiveHeight: true,
            slidesToShow: 1,
            slidesToScroll: 1
          });
          $('.onboarding-modal').on('shown.bs.modal', function (e) {
            $('.onboarding-modal .onboarding-slider-w').slick('setPosition');
          });
        }
      };

      // #22. Colors Toggler
      var _initColorToggler = function(){
        $('.floated-colors-btn').on('click', function () {
          if ($('body').hasClass('color-scheme-dark')) {
            $('.menu-w').removeClass('color-scheme-dark').addClass('color-scheme-light').removeClass('selected-menu-color-bright').addClass('selected-menu-color-light');
            $(this).find('.os-toggler-w').removeClass('on');
          } else {
            $('.menu-w, .top-bar').removeClass(function (index, className) {
              return (className.match(/(^|\s)color-scheme-\S+/g) || []).join(' ');
            });
            $('.menu-w').removeClass(function (index, className) {
              return (className.match(/(^|\s)color-style-\S+/g) || []).join(' ');
            });
            $('.menu-w').addClass('color-scheme-dark').addClass('color-style-transparent').removeClass('selected-menu-color-light').addClass('selected-menu-color-bright');
            $('.top-bar').addClass('color-scheme-transparent');
            $(this).find('.os-toggler-w').addClass('on');
          }
          $('body').toggleClass('color-scheme-dark');
          return false;
        });
      };

      // #23. Autosuggest Search
      var _autoSearch = function(){
        $('.autosuggest-search-activator').on('click', function () {
          var search_offset = $(this).offset();
          // If input field is in the activator - show on top of it
          if ($(this).find('input[type="text"]')) {
            search_offset = $(this).find('input[type="text"]').offset();
          }
          var search_field_position_left = search_offset.left;
          var search_field_position_top = search_offset.top;
          $('.search-with-suggestions-w').css('left', search_field_position_left).css('top', search_field_position_top).addClass('over-search-field').fadeIn(300).find('.search-suggest-input').focus();
          return false;
        });

        $('.search-suggest-input').on('keydown', function (e) {

          // Close if ESC was pressed
          if (e.which == 27) {
            $('.search-with-suggestions-w').fadeOut();
          }

          // Backspace/Delete pressed
          if (e.which == 46 || e.which == 8) {
            // This is a test code, remove when in real life usage
            $('.search-with-suggestions-w .ssg-item:last-child').show();
            $('.search-with-suggestions-w .ssg-items.ssg-items-blocks').show();
            $('.ssg-nothing-found').hide();
          }

          // Imitate item removal on search, test code
          if (e.which != 27 && e.which != 8 && e.which != 46) {
            // This is a test code, remove when in real life usage
            $('.search-with-suggestions-w .ssg-item:last-child').hide();
            $('.search-with-suggestions-w .ssg-items.ssg-items-blocks').hide();
            $('.ssg-nothing-found').show();
          }
        });

        $('.close-search-suggestions').on('click', function () {
          $('.search-with-suggestions-w').fadeOut();
          return false;
        });
      };

      // #24. Element Actions
      var _elementActions = function(){
        $('.element-action-fold').on('click', function () {
          var $wrapper = $(this).closest('.element-wrapper');
          $wrapper.find('.element-box-tp, .element-box').toggle(0);
          var $icon = $(this).find('i');

          if ($wrapper.hasClass('folded')) {
            $icon.removeClass('os-icon-plus-circle').addClass('os-icon-minus-circle');
            $wrapper.removeClass('folded');
          } else {
            $icon.removeClass('os-icon-minus-circle').addClass('os-icon-plus-circle');
            $wrapper.addClass('folded');
          }
          return false;
        });
      };
      
      var _menuToggle = function(){
        $('.toggle-menu-style').on('click', function () {
          $(".menu-w").toggleClass("menu-layout-compact menu-layout-mini");
        });
      };

      var _blink = function(){
        $('.blink').each(function() {
            var elem = $(this);
            setInterval(function() {
                if (elem.css('visibility') == 'hidden') {
                    elem.css('visibility', 'visible');
                } else {
                    elem.css('visibility', 'hidden');
                }    
            }, 500);
        });
      }


      var _wbs2 = function(base_url) {
        gantt.config.columns = [
          {name: "text", tree: true, width: 370, resize: true, label: "Milestones And Activities"},
          {name: "start_date", align: "center", width: 100, label: "Start Date", resize: true},
          {name: "end_date", align: "center",label: "End Date",width: 100, resize: true},
          {name: "duration", width: 58, align: "center"},
          {name: "add", width: 30}
        ];
    
        // var resourceConfig = {
        //     columns: [
        //         {
        //             name: "name", label: "Name", tree:true, template: function (resource) {
        //             return resource.text;
        //         }
        //         },
        //         {
        //             name: "workload", label: "Workload", template: function (resource) {
        //             var tasks;
        //             var store = gantt.getDatastore(gantt.config.resource_store),
        //                 field = gantt.config.resource_property;
    
        //             if(store.hasChild(resource.id)){
        //                 tasks = gantt.getTaskBy(field, store.getChildren(resource.id));
        //             }else{
        //                 tasks = gantt.getTaskBy(field, resource.id);
        //             }
    
        //             var totalDuration = 0;
        //             for (var i = 0; i < tasks.length; i++) {
        //                 totalDuration += tasks[i].duration;
        //             }
    
        //             return (totalDuration || 0) * 8 + "h";
        //         }
        //         }
        //     ]
        // };
    
        gantt.templates.resource_cell_class = function(start_date, end_date, resource, tasks){
            var css = [];
            css.push("resource_marker");
            if (tasks.length <= 1) {
                css.push("workday_ok");
            } else {
                css.push("workday_over");
            }
            return css.join(" ");
        };
    
        gantt.templates.resource_cell_value = function(start_date, end_date, resource, tasks){
            return "<div>" + tasks.length * 8 + "</div>";
        };
    
        gantt.locale.labels.section_owner = "Resources";
        gantt.config.lightbox.sections = [
            {name: "description", height: 38, map_to: "text", type: "textarea", focus: true},
            //{name: "owner", height: 22, map_to: "owner_id", type: "select", options: gantt.serverList("people")},
            {name:"owner",height:60, type:"multiselect", options:gantt.serverList("people"), map_to:"owner_id", unassigned_value:5 },
            {name: "time", type: "duration", map_to: "auto"}
        ];
    
        gantt.config.resource_store = "resource";
        gantt.config.resource_property = "owner_id";
        gantt.config.order_branch = true;
        gantt.config.open_tree_initially = true;
        
        gantt.config.order_branch = true;
        gantt.config.order_branch_free = true;
        gantt.config.grid_resize = true;
        gantt.config.static_background = true;
        gantt.config.auto_scheduling_strict = true;

        gantt.config.layout = {
            css: "gantt_container",
            rows: [
                {
                    cols: [
                        {view: "grid", group:"grids", scrollY: "scrollVer"},
                        {resizer: true, width: 1},
                        {view: "timeline", scrollX: "scrollHor", scrollY: "scrollVer"},
                        {view: "scrollbar", id: "scrollVer", group:"vertical"}
                    ],
                    gravity:2
                },
                {resizer: true, width: 1},
                // {
                //     config: resourceConfig,
                //     cols: [
                //         {view: "resourceGrid", group:"grids", width: 435, scrollY: "resourceVScroll" },
                //         {resizer: true, width: 1},
                //         {view: "resourceTimeline", scrollX: "scrollHor", scrollY: "resourceVScroll"},
                //         {view: "scrollbar", id: "resourceVScroll", group:"vertical"}
                //     ],
                //     gravity:1
                // },
                {view: "scrollbar", id: "scrollHor"}
            ]
        };
    
        var resourcesStore = gantt.createDatastore({
            name: gantt.config.resource_store,
            type: "treeDatastore",
            initItem: function (item) {
                item.parent = item.parent || gantt.config.root_id;
                item[gantt.config.resource_property] = item.parent;
                item.open = true;
                return item;
            }
        });
        gantt.config.scale_unit = "month";
        gantt.config.date_scale = "%m - %Y";
        gantt.config.date_grid = "%d-%M-%Y";
        // ganttModules.zoom.setZoom(4);
        gantt.init("wbs_milestones");
        gantt.load(base_url+"assets/js/resource_project_multiple_owners_1.json");
    
        resourcesStore.attachEvent("onParse", function(){
            var people = [];
            resourcesStore.eachItem(function(res){
                if(!resourcesStore.hasChild(res.id)){
                    var copy = gantt.copy(res);
                    copy.key = res.id;
                    copy.label = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' + res.text;
                    people.push(copy);
                }
                if(resourcesStore.hasChild(res.id)){
                    var copy = gantt.copy(res);
                    copy.key = res.id;
                    copy.label = res.text;
                    people.push(copy);
                }
            });
            gantt.updateCollection("people", people);
        });
    
        resourcesStore.parse([
            {id: 1, text: "HUMAN RESOURCES", parent:null},
            {id: 2, text: "HARDWARE RESOURCES", parent:null},
            {id: 3, text: "OFFICE REQUIREMENTS", parent:null},
            {id: 4, text: "SOFTWARE REQUIREMENTS", parent:null},
            {id: 6, text: "Chief Information Officer", parent:1},
            {id: 7, text: "Program Director", parent:1},
            {id: 8, text: "Project Director", parent:1},
            {id: 9, text: "Service Delivery Director", parent:1},
            {id: 10, text: "Sales Director", parent:1},
            {id: 11, text: "Insides Sales Manager", parent:1},
            {id: 12, text: "Project Manager", parent:1},
            {id: 13, text: "Business Development Manager", parent:1},
            {id: 14, text: "IT Supply Chain Manager", parent:1},
            {id: 15, text: "Account Manager", parent:1},
    
            {id: 16, text: "IT Procurement Specialist", parent:1},
            {id: 17, text: "IT Marketing Communications Executive", parent:1},
            {id: 18, text: "IT Trainer", parent:1},
            {id: 19, text: "Channel Sales Specialist", parent:1},
            {id: 20, text: "Inside Sales Specialist", parent:1},
            {id: 22, text: "SAP Team Lead", parent:1},
            {id: 23, text: "Software Development Manager", parent:1},
            {id: 24, text: "Senior Solutions Architect", parent:1},
            {id: 25, text: "Lead Software Developer", parent:1},
            {id: 26, text: "Business Consultant", parent:1},
    
            {id: 27, text: "SAP Consultant", parent:1},
            {id: 28, text: "Software Sales manager", parent:1},
            {id: 29, text: "ETL Developers", parent:1},
            {id: 30, text: "Websphere Application Developers", parent:1},
            {id: 31, text: "BI Consultant", parent:1},
            {id: 32, text: "System Analyst", parent:1},
            {id: 33, text: "QA Specialist", parent:1},
            {id: 34, text: "Junior Solutions Architect", parent:1},
            {id: 35, text: "Software Engineer", parent:1},
            {id: 36, text: "Software Programmer", parent:1},
    
            {id: 37, text: "Web Designer", parent:1},
            {id: 38, text: "Analyst Programmer", parent:1},
            {id: 39, text: "Java Developer", parent:1},
            {id: 40, text: "Programmer", parent:1},
            {id: 41, text: "Billing System Specialist", parent:1},
            {id: 42, text: "Implementation & Technical Support Manager", parent:1},
            {id: 43, text: "Information Security Manager", parent:1},
            {id: 44, text: "UNIX Specialist", parent:1},
            {id: 45, text: "Service Delivery Manager", parent:1},
            {id: 46, text: "Senior System Engineer", parent:1},
    
            {id: 47, text: "Wintel Specialist", parent:1},
            {id: 48, text: "IT Manager", parent:1},
            {id: 49, text: "Problem & change Management Specialist", parent:1},
            {id: 50, text: "Security Analyst", parent:1},
            {id: 51, text: "Technical Writer", parent:1},
            {id: 52, text: "Unix & linux OS Engineer", parent:1},
            {id: 53, text: "Pre-Sales Engineer", parent:1},
            {id: 54, text: "Billing System Engineer", parent:1},
            {id: 55, text: "Database Administrator", parent:1},
            {id: 56, text: "System Engineer", parent:1},
    
            {id: 57, text: "Technical Consultant", parent:1},
            {id: 58, text: "Network Administrator", parent:1},
            {id: 58, text: "Helpdesk Tech Support(Foreign Language Expertise)", parent:1},
            {id: 60, text: "Help Desk Analyst", parent:1},
            {id: 61, text: "IT Executive", parent:1},
            {id: 62, text: "Automation Support Engineer", parent:1},
            {id: 63, text: "Technician", parent:1},
            {id: 64, text: "IT Administrator", parent:1},
    
            {id: 65, text: "Hard Drive: Minimum 32 GB", parent:2},
            {id: 66, text: "Ethernet connection (LAN) OR a wireless adapter (Wi-Fi)", parent:2},
            {id: 67, text: "Processor", parent:2},
            {id: 68, text: "Memory (RAM): Minimum 1 GB", parent:2},
    
            {id: 69, text: "Appery.io", parent:4},
            {id: 70, text: "Mobile Roadie", parent:4},
            {id: 71, text: "TheAppBuilder", parent:4},
            {id: 72, text: "AppMachine", parent:4},
    
            {id: 73, text: "Bookcases", parent:3},
            {id: 74, text: "File cabinets", parent:3},
            {id: 75, text: "Wall whiteboard and markers", parent:3}
        ]);
    
    };

      return {
        initLoader: function(Splash){
          _splashLoader(Splash);
        },
        InitCalendar: function() {
          _InitCalendar();
        },
        initChat: function() {
          _initChatApp();
        },
        initFullChat: function(){
          _fullChatApp();
        },
        initValidation: function(){
          _formValidation();
        },
        initDateRangePicker: function(){
          _dateRangePicker();
        },
        initDataTable: function(){
          _dataTable();
        },
        initEditableTable: function() {
          _editableTables();
        },
        initFormWizard: function() {
          _formWizard();
        },
        initSelect2: function () {
          _select2();
        },
        initCkeditor: function () {
          _ckeditor();
        },
        initChartLib: function () {
          _visualization();
        },
        initMenu: function () {
          _initMenu();
        },
        initContentPanelTrigger: function() {
          _cpanelTrigger();
          _cpanelToggler();
        },
        initMailApp: function() {
          _emailApp();
        },
        initCRMPipeline: function() {
          _crmPipeline();
        },
        initDropdown: function() {
          _dropDowns();
        },
        initTooltip: function() {
          _initTooltip();
        },
        initPopover: function() {
          _initPopover();
        },
        initTodoApp: function() {
          _todoApp();
        },
        initFancySelector: function() {
          _fancySelector();
        },
        initSupportService: function() {
          _supportService();
        },
        initModal: function() {
          _initModal();
        },
        initColorToggler: function() {
          _initColorToggler();
        },
        initAutoSearch: function() {
          _autoSearch();
        },
        initElementActions: function() {
          _elementActions();
        },
        initContentMenuToggle: function() {
          _menuToggle();
        },
        initBlink: function(){
          _blink();
        },
        initWBS: function(base_url){
          _wbs(base_url);
        },
        initWBS2: function(base_url){
          _wbs2(base_url);
        }
    }
}();
// When content is loaded
document.addEventListener('DOMContentLoaded', function() {
  App.initMenu();
  App.initContentMenuToggle();
  App.initDropdown();
  App.initElementActions();
  App.initModal();
  App.initFancySelector();
  App.initContentPanelTrigger();
  App.initSupportService();
  App.initBlink();
  App.initTooltip();
});
// When page is fully loaded
window.addEventListener('load', function() {
  $('.preloader-it').fadeOut('slow');
  App.initLoader($('.preloader-it'));
});