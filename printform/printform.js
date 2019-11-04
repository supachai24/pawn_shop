console.log("Printform");

var data = store.get("pledgeDetails");
console.log(data);
$("#pledgeTicketId").text(data.PledgeTicketID);
var pledgeStartDate = data.PledgeStartDate;
$("#customerName").text(data.Title + " " + data.Name + " " + data.Surname);
$("#citizenId").text(data.CitizenID);
$("#address").text(data.CurrentAddress);
$("#asset").text(data.TitleAsset);
$("#price").text(handleCommaThousand(data.Price));
