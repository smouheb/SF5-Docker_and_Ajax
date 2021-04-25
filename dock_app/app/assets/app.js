/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';

//jquery for ajax
var $ = require('jquery');
$(function(){
  //return and append to the dom json response
  var ul = $(".resp");
  $('button').on('click', function(){
    var name = $('#name').val();
    var lastname =  $('#lastname').val();
    let data = {
      "name": name,
      "lastname": lastname,
    };
    $.ajax({
      url: 'http://localhost:8080/aj',
      type: 'POST',
      data: data,
      success: function(data){
        $.each(data, function(i,item){
          ul.append('<li>'+item+'</li>');
        })
      },
    });
  });
  // piece of code to return via ajax data from the database
  var tr = $('table');
  $('#search').on('keyup', function(){
    $('.new').remove();
    let data = {
      "name": $('#search').val(),
    };
    let table = $('.table');
    $.ajax({
      url: 'http://localhost:8080/ajSearch',
      type: 'POST',
      data: data,
      success: function(response){
        let resp = JSON.parse(response);
        $.each(resp, function(i, item){
          table.append(
             '<tr class="new">'+
                 '<td>'+item['id']+'</td>'
                +'<td>'+item['name']+'</td>'
                +'<td>'+item['lastname']+'</td>'
             +'</tr>'
           );
        });
      },
    });
  })

});
