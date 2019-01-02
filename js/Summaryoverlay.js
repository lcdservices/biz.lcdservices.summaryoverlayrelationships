CRM.$(function($) {
  $('.new-trail')
      .crmSnippet()
      .on('crmLoad', function(e, data) {
      document.title = data.title;
      $('h1').html(data.title);
    })
     .on('click', 'a', function() {
      CRM.loadForm("/civicrm/contact/view/rel?action=view&amp;reset=1&amp;cid=79&amp;id=123&amp;rtype=b_a&amp;selectedChild=rel")
      .on('crmFormSuccess',function(event, data) {

      });
      return false;
    });
});

