
$(loop); //Call on ready

function loop(){
    $('#workingGirl').removeAttr('style') //reset the initial position
    $('#workingGirl').delay(100).animate({'left': '1800px'}, 18000);
    $('#workingGirl').delay(100).animate({'right': '1800px'}, 2000, loop); //Add the loop function in callback

    $('#pushbike').removeAttr('style') //reset the initial position
    $('#pushbike').delay(100).animate({'up': '2'}, 18000);
    $('#pushbike').delay(100).animate({'down': '3'}, 2000, loop); //Add the loop function in callback
}
