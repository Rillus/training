var validationText ='<div class="alert alert-error"><button class="close" data-dismiss="alert" type="button" tabindex="-1">&times;</button>{{message}}</div>';
var running = false;
	
var validate = {
	'required' : function(el) {
		var value = el.val(),
			message = "This field is required.";
		if (value == ""){
			validate.errorMessage(message, el);
		} else {
			validate.removeError(el);
		}
	},
	'date' : function(el) {
		var validate = this,
			regex = new RegExp(/(\d+)(?:-(\d+))?/),
			message = "You must enter a date (DD/MM/YYYY).";
		
		validate.runValidation(el, regex, message)
	},
	'date-time' : function(el) {
		var validate = this,
			regex = new RegExp(/(\d+)(?:-(\d+))?/),
			message = "You must enter a date and time (DD/MM/YYYY HH:MM).";
		
		validate.runValidation(el, regex, message)
	},
	'integer' : function(el) {
		var validate = this,
			regex = new RegExp(/^\d+$/),
			message = "You must enter an integer.";
		
		validate.runValidation(el, regex, message)
	},
	'decimal' : function(el) {
		var validate = this,
			regex = new RegExp(/^(\d+\.?\d{0,9}|\.\d{1,9})$/),
			message = "You must enter a decimal.";
		
		validate.runValidation(el, regex, message)
	},
	'url' : function(el) {
		var validate = this,
			regex = new RegExp(/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/),
			message = "You must enter a valid url.";
		
		validate.runValidation(el, regex, message)
	},
	'email' : function(el) {
		var validate = this,
			regex = new RegExp(/^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@[\w\-\+_]+\.[\w\-\+_]+(\.[\w\-\+_]+)*\s*$/),
			message = "You must enter a valid email.";
			
		validate.runValidation(el, regex, message)
	},
	'runValidation' : function(el, regex, message){
		var value = el.val();
		if (! regex.test(value)){
			validate.errorMessage(message, el);
		} else {
			validate.removeError(el);
		}
	},
	'errorMessage' : function(message, el){
		message = validationText.replace('{{message}}', message);
		if (! el.parents().next().hasClass('alert')){
			el.parents('label').after(message);
			console.log('error message added');
		}
	},
	'removeError' : function (el){
		var offender = el.parents('label').next();
		if (offender.hasClass('alert')){
			offender.remove();
		}
	}
};

function getDataTypes(){
	$('input, select').each(function(index){
		var dataType = $(this).data("type"),
			dataRequired = $(this).data("required"),
			el = $(this);
		
		
		if ((dataRequired != "undefined") && (dataRequired != "") && (dataRequired == true)){ // check the field has a data-type attribute
			el.focusout(function(){
				validate.required(el);
			});
		}
		if ((dataType != "undefined") && (dataType != "")){ // check the field has a data-type attribute
			el.focusout(function(){ // validate when input field loses focus
				if (typeof(validate[dataType]) != "undefined") { // check the function exists!
					validate[dataType](el); // validate the field
				}
			})
		}
	})
};

function runValidation(form){
	if(form === undefined) { 
		form = "";
	} else {
		form = "#"+form;
	}
	$(form+' input, '+form+' select').each(function(index){
		var dataType = $(this).data("type"),
			dataRequired = $(this).data("required"),
			el = $(this);

		if ((dataRequired != "undefined") && (dataRequired != "") && (dataRequired == true)){ // check the field has a data-type attribute
			validate.required(el);
		}
		if ((dataType != "undefined") && (dataType != "")){ // check the field has a data-type attribute
			if (typeof(validate[dataType]) != "undefined") { // check the function exists!
				validate[dataType](el); // validate the field
			}
		}
	})
}

function isValid(el){
	if ($(el).find('.alert').length > 0) {
		return false;
	} else {
		return true;
	}
}
function setupValidation(){
	getDataTypes();
	if (running == true){
		return false;
	}
	running = true;

	//$('form').on("submit", function(e){
	$(document.body).on('click', "[type='submit']", function(e){
		e.preventDefault();
		var el = $(this).parents('form');
		runValidation(el.attr('id'));
		//var timeout = window.setTimeout(function(){
			if (isValid(el) === true){
				console.log('form submit');
				var url = el.attr('action');
			    $.ajax({
		            type: "POST",
		            url: url,
		            data: el.serialize(), // serializes the form's elements.
		            success: function(data) {
		               	console.log(data); // show response from the php script.
		                location.reload(true);
		           	}
		        });
			}
		//}, 1000);
	});
}

$(document).ready(function(){
	setupValidation();
});