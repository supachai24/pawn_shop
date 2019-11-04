// Set locale language
moment.locale("th");

var data = store.get("pledgeDetails");
// console.log(data);
var pledgeStartDate = data.PledgeStartDate.substring(0, 10);
var date = pledgeStartDate.substring(8, 10);
var month = pledgeStartDate.substring(5, 7);
var year = pledgeStartDate.substring(0, 4);
var ba = parseInt(year) + 543;
var monthTH = moment(month, 'MM').format('MMMM');

$("#pledgeTicketId").text(data.PledgeTicketID);
$("#date").text(date);
$("#month").text(monthTH);
$("#ba").text(ba);
$("#customerName").text(data.Title + " " + data.Name + " " + data.Surname);
$("#citizenId").text(data.CitizenID);
$("#address").text(data.CurrentAddress);
$("#asset").text(data.TitleAsset);
$("#price").text(handleCommaThousand(data.Price));