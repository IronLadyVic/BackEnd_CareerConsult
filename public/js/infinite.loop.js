
$(loop); //Call on ready

function loop(){
    $('#workingGirl').removeAttr('style') //reset the initial position
    $('#workingGirl').delay(100).animate({'left': '1800px'}, 18000);
    $('#workingGirl').delay(100).animate({'right': '1800px'}, 2000, loop); //Add the loop function in callback
}

