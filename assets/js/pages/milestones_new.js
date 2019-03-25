var Milestone = function () {
  var _wbs = function(base_url,milestones,project_id) {
    gantt.config.columns = [
      {name: "text", tree: true, width: 370, resize: true, label: "Milestones And Activities"},
      {name: "start_date", align: "center", width: 100, label: "Start Date", resize: true},
      {name: "end_date", align: "center",label: "End Date",width: 100, resize: true},
      {name: "duration", width: 58, align: "center"},
      {name: "add", width: 30}
    ];

    gantt.config.types.root = "project";
	gantt.config.types.subproject = "milestone";
	gantt.config.lightbox.subproject_sections = gantt.config.lightbox.sections;
	gantt.config.open_tree_initially = true;
	gantt.config.lightbox.project_sections = [
		{name: "description", height: 70, map_to: "text", type: "textarea", focus: true},
		{name: "time", type: "duration", map_to: "auto", readonly: true}
    ];
	 function defaultValues(task) {
		var text = "",
			index = gantt.getChildren(task.parent || gantt.config.root_id).length + 1,
			types = gantt.config.types;

		switch (task.type) {
			case types.project:

				text = "Project";
				break;
			case types.subproject:
				text = 'Milestone';
				break;
			default:
				text = 'Activity';
				break;
		}
		task.text = text + " #" + index;
		return;
    }
	gantt.attachEvent("onTaskCreated", function (task) {
		var parent = task.parent,
			types = gantt.config.types,
			level = 0;

		if (parent == gantt.config.root_id || !parent) {
			level = 0;
		} else {
			level = gantt.getTask(task.parent).$level + 1;
		}
		switch (level) {
			case 0:
				task.type = types.project;
				break;
			case 1:
				task.type = types.subproject;
				break;
			default:
				task.type = types.task;
				break;
		}
		defaultValues(task);
		return true;
    });
	gantt.templates.task_class = gantt.templates.grid_row_class = function (start, end, task) {
		switch (task.type) {
			case gantt.config.types.project:
				return 'no_drag_progress project';
				break;
			case gantt.config.types.subproject:
				return 'no_drag_progress milestone';
				break;
			default:
				return 'activity';
				break;
		}
	};
    gantt.init("wbs_milestones");
	gantt.parse(milestones);//Highlights Weekend - START
    gantt.templates.scale_cell_class = function (date) {
		if (date.getDay() == 0 || date.getDay() == 6) {
			return "weekend";
		}
	};
	gantt.templates.task_cell_class = function (item, date) {
		if (date.getDay() == 0 || date.getDay() == 6) {
			return "weekend"
		}
    };
    //Highlights Weekend - ENDS

    //Progress Text - START
    gantt.templates.progress_text = function (start, end, task) {
		return "<span style='text-align:left;'>" + Math.round(task.progress * 100) + "% </span>";
    };
    //Progress Text - ENDS

    var _setScaleConfig = function(value) {
		switch (value) {
			case 1:
				gantt.config.scale_unit = "day";
				gantt.config.step = 1;
				gantt.config.date_scale = "%d %M";
				gantt.config.subscales = [];
				gantt.config.scale_height = 27;
				gantt.templates.date_scale = null;
				break;
			case 2:
				var weekScaleTemplate = function (date) {
					var dateToStr = gantt.date.date_to_str("%d %M");
					var startDate = gantt.date.week_start(new Date(date));
					var endDate = gantt.date.add(gantt.date.add(startDate, 1, "week"), -1, "day");
					return dateToStr(startDate) + " - " + dateToStr(endDate);
				};

				gantt.config.scale_unit = "week";
				gantt.config.step = 1;
				gantt.templates.date_scale = weekScaleTemplate;
				gantt.config.subscales = [
					{unit: "day", step: 1, date: "%D"}
				];
				gantt.config.scale_height = 50;
				break;
			case 3:
				gantt.config.scale_unit = "month";
				gantt.config.date_scale = "%F, %Y";
				gantt.config.subscales = [
					{unit: "day", step: 1, date: "%j, %D"}
				];
				gantt.config.scale_height = 50;
				gantt.templates.date_scale = null;
                break;
            case 4:
                gantt.config.scale_unit = "year";
                gantt.config.step = 1;
                gantt.config.date_scale = "%Y";
                gantt.config.min_column_width = 50;
				gantt.config.scale_height = 90;
                gantt.templates.date_scale = null;

                var quarterLabel = function(date) {
                    var month = date.getMonth();
                    var q_num;
            
                    if (month >= 9) {
                        q_num = 4;
                    } else if (month >= 6) {
                        q_num = 3;
                    } else if (month >= 3) {
                        q_num = 2;
                    } else {
                        q_num = 1;
                    }
            
                    return "Q" + q_num;
                };

                gantt.config.subscales = [
                    {unit: "quarter", step: 1, template: quarterLabel},
                    {unit: "month", step: 1, date: "%M"}
                ];
                break;
			case 5:
				gantt.config.scale_unit = "year";
				gantt.config.step = 1;
				gantt.config.date_scale = "%Y";
				gantt.config.min_column_width = 50;
				gantt.config.scale_height = 90;
				gantt.templates.date_scale = null;
				gantt.config.subscales = [
					{unit: "month", step: 1, date: "%M"}
				];
				break;
		}
	};
	gantt.attachEvent("onAfterTaskAdd", function(id,item){
		console.log("1111111111111111111111111111111111111");
		  var csrfName = _getcsrfname(),
			  csrfHash = _getcsrfcontent();
		  		_showLoader();
		  $.post(base_url+'milestone/add',{"imas_csrf_token":csrfHash,"data":item,"id":project_id}, function(d) {
			  _hideLoader();
			  _setcsrfcontent(d.token);
			  $('#milestone_l').find("[name='imas_csrf_token']").val(d.token);
			  if(d.status == 1) {
				  gantt.clearAll();
				  gantt.parse(d.milestone);
				  _hideLoader();

			  }else{
				  gantt.clearAll();
				  gantt.parse(d.milestone);
				  _hideLoader();

			  }
		  }, 'json');
	  });
	  gantt.attachEvent("onBeforeLinkAdd", function(id,link){
		  console.log("222222222222222222222222222222222222");
		  var csrfName = _getcsrfname(),
			  csrfHash = _getcsrfcontent();
		  _showLoader();
		  $.post(base_url+'milestone/add_link',{"imas_csrf_token":csrfHash,"data":link,"id":project_id}, function(d) {
			  _hideLoader();
			  _setcsrfcontent(d.token);
			  $('#milestone_l').find("[name='imas_csrf_token']").val(d.token);
			  if(d.status == 1) {

				  gantt.clearAll();
				  gantt.parse(d.milestone);
				  _hideLoader();
			  }else{
				  gantt.clearAll();
				  gantt.parse(d.milestone);
				  _hideLoader();

			  }
		  }, 'json');
	  });
	  gantt.attachEvent("onAfterTaskDelete", function(id,item){
		  console.log("3333333333333333333333333333333333333333333");
		  var csrfName = _getcsrfname(),
			  csrfHash = _getcsrfcontent();
		  _showLoader();
		  $.post(base_url+'milestone/delete_task',{"imas_csrf_token":csrfHash,"task_id":id,"id":project_id}, function(d) {
			  _hideLoader();
			  _setcsrfcontent(d.token);
			  $('#milestone_l').find("[name='imas_csrf_token']").val(d.token);
			  if(d.status == 1) {
				  gantt.clearAll();
				  gantt.parse(d.milestone);
				  _hideLoader();
			  }else{
				  gantt.clearAll();
				  gantt.parse(d.milestone);
				  _hideLoader();

			  }
		  }, 'json');
	  });
	  gantt.attachEvent("onAfterTaskUpdate", function(id,item){
		  console.log("44444444444444444444444444444444444444444444");
		  var csrfName = _getcsrfname(),
			  csrfHash = _getcsrfcontent();
		  _showLoader();
		  $.post(base_url+'milestone/update_task_info',{"imas_csrf_token":csrfHash,"data":item,"id":project_id,"task_id":id }, function(d) {
			  _hideLoader();
			  _setcsrfcontent(d.token);
			  $('#milestone_l').find("[name='imas_csrf_token']").val(d.token);
			  if(d.status == 1) {
				  gantt.clearAll();
				  gantt.parse(d.milestone);
				  _hideLoader();
			  }else{
				  gantt.clearAll();
				  gantt.parse(d.milestone);
				  _hideLoader();

			  }
		  }, 'json');
	  });
	  gantt.attachEvent("onAfterLinkDelete", function(id,item){
		  console.log("555555555555555555555555555555555555555555");
		  var csrfName = _getcsrfname(),
			  csrfHash = _getcsrfcontent();
		  _showLoader();
		  $.post(base_url+'milestone/link_delete',{"imas_csrf_token":csrfHash,"id":project_id,"link_id":id}, function(d) {
			  _hideLoader();
			  _setcsrfcontent(d.token);
			  $('#milestone_l').find("[name='imas_csrf_token']").val(d.token);
			  if(d.status == 1) {
				  gantt.load(d.milestone);
				  gantt.refreshData();

				  _hideLoader();
			  }else{
				  gantt.clearAll();
				  gantt.parse(d.milestone);
				  _hideLoader();

			  }
		  }, 'json');
	  });
	  gantt.attachEvent("onTaskDrag", function(id, mode, task, original){
		  console.log("666666666666666666666666666666666666666");
		  var modes = gantt.config.drag_mode;
		  if(mode == modes.move){
			  var diff = task.start_date - original.start_date;
			  gantt.eachTask(function(child){
				  child.start_date = new Date(+child.start_date + diff);
				  child.end_date = new Date(+child.end_date + diff);
				  gantt.refreshTask(child.id, true);
			  },id );
		  }
	  });
	 gantt.attachEvent("onBeforeTaskDrag", function(id, mode, e){
		if(gantt.hasChild(id) == false){
			  return true;      //denies dragging if the global task index is odd
		  }
		  return false;           //allows dragging if the global task index is even
	  });
    var currentScale = 2;
    _setScaleConfig(currentScale);
    $(".gantt-control").on("click",function(){
        switch ($(this).data('control')) {
            case 'undo' :
                gantt.undo();
            break;
            case 'redo' :
                gantt.redo();
            break;
            case 'fullscreen' :
                gantt.expand();
            break;
            case 'zoom-in' :
                if(currentScale < 5 && currentScale >= 1){
                    $(this).next().removeClass("disabled");
                    _setScaleConfig(++currentScale);
                    gantt.render();
                }else{
                    $(this).addClass("disabled")
                }
            break;
            case 'zoom-out' :
                if(currentScale <= 5 && currentScale > 1){
                    $(this).prev().removeClass("disabled");
                    $(this).removeClass("disabled");
                    _setScaleConfig(--currentScale);
                    gantt.render();
                }else{
                    $(this).addClass("disabled")
                }
            break;
        }
    })
};
	var _menuSelected = function(menu){
		menu.addClass("selected");
	}; 
	return {
        init: function(milestones,project_id){
			ganttobj = _wbs(base_url,milestones,project_id);
			_menuSelected($("#m_gc"));
        }
    }
}();
