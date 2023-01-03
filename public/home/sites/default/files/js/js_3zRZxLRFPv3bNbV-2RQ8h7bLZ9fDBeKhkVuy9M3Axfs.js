"use strict";
var Events = Events || {};
var today = moment(),
  eventdates = [],
  json_eventdata,
  latest_events = [],
  featured_event = [];
Events = {
  init: function () {
    jQuery("#datepicker")
      .datetimepicker({
        inline: true,
        useCurrent: true,
        minDate: new Date(),
      })
      .on("dp.change", function (e) {
        var selectedDate = moment(e.date).format("MM/DD/Y");
        Events.showActiveEvents(selectedDate, "first");
      })
      .on("dp.update", function (e) {
        Events.getLatestEvents();
      });
    Events.triggerEventData();
  },
  triggerEventData: function () {
    var eventsdata = [];

    if (json_eventdata || json_eventdata != undefined) {
      eventsdata = JSON.parse(json_eventdata);
    }
    if (eventsdata.length > 0) {
      var today_date = moment().format("MM/DD/YYYY");
      jQuery.each(eventsdata, function (index, eventdata) {
        var event_date = moment(eventdata.date).format("MM/DD/YYYY");

        if (jQuery.inArray(event_date, eventdates) == -1) {
          eventdates.push(event_date);
          featured_event[event_date] = [];
        }
        featured_event[event_date].push(eventdata);

        if (new Date(eventdata.date) >= new Date(today_date)) {
          latest_events.push(new Date(eventdata.date));
        }
      });
      Events.getLatestEvents();
    } else {
      //added no image for upcoming events
      var renderHtml =
        '<div class="section__card"><div class=""><img src="themes/custom/iitm/assets/images/no_img/no_events_m3.png" ></div></div>';
      jQuery("#event_section").html(renderHtml);
    }
  },
  getLatestEvents: function () {
    latest_events.sort(function (a, b) {
      //return Math.abs(1 - a / new Date()) - Math.abs(1 - b / new Date());
      var dateA = new Date(a),
        dateB = new Date(b);
      return dateA - dateB;
    });

    var next_featured_event = moment(latest_events[0]).format("MM/DD/Y");
    if (eventdates.length > 0) {
      jQuery("#datepicker").data("DateTimePicker").enabledDates(eventdates);
    }
    Events.showActiveEvents(next_featured_event, "first");
  },
  showActiveEvents: function (next_date, onpageload) {
    if (eventdates.length > 0) {
      if (onpageload == "first") {
        jQuery("#datepicker .datepicker")
          .find('[data-day="' + next_date + '"]')
          .addClass("active eventsdate__selected");
      }
      this.highlightDates();
      this.eventSlick(next_date);
    } else {
      //jQuery("#datepicker .datepicker").data("DateTimePicker").disable();
    }
  },
  highlightDates: function () {
    if (eventdates.length > 0) {
      jQuery.each(eventdates, function (index, date) {
        var eventDate = moment(date, "MM/DD/Y");
        var isPastDate = eventDate.diff(today, "days") < 0 ? true : false;
        if (!isPastDate) {
          jQuery("#datepicker .datepicker")
            .find('[data-day="' + date + '"]')
            .addClass("active");
        }
      });
    }
  },
  eventSlick: function (next_date) {
    var renderHtml = this.renderEventsHtml(next_date);

    if (!renderHtml) return renderHtml;

    //alert("here");

    jQuery("#event_section").html(renderHtml);
    jQuery("#event_section .infoSlider").slick({
      dots: false,
      arrows: true,
      infinite: true,
      speed: 1500,
      autoplaySpeed: 6000,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: false,
      pauseOnHover: false,
      useTransform: true,
      draggable: true,
      easing: "easeOutElastic",
    });
    iitm_app.setNoImage();
  },
  renderEventsHtml: function (next_date) {
    var renderEvents = "";
    if (featured_event[next_date] == undefined) return false;
    renderEvents += '<div class="infoSlider owl-carousel owl-theme">';
    jQuery.each(featured_event[next_date], function (i, event) {
      var no_img_attr = "";
      if (event.no_img) {
        no_img_attr = " data-noimg=1 data-noimg-category=" + event.no_img;
      }
      //var eventDate = event.date; // formatDate(event.date);
      renderEvents +=
        "<a href = " +
        event.url +
        " title = " +
        event.title +
        ' class="eventsdate__setposition" > <div class="section__card"><div class="section__cardimg"><img src=' +
        event.img +
        " alt=" +
        event.title +
        no_img_attr +
        '><div class="section__cardposition"><p>' +
        event.display_date +
        "</p><p>" +
        event.title +
        "</p></div></div></div></a>";
    });
    renderEvents += "</div>";
    return renderEvents;
  },
};

(function ($, Drupal) {
  Events.init();
})(jQuery, Drupal);
;

  $('.counter-value').each(function(){
      $(this).prop('Counter',0).animate({
          Counter: $(this).text()
      },{
          duration: 3500,
          easing: 'swing',
          step: function (now){
              $(this).text(Math.ceil(now));
          }
      });
  });

