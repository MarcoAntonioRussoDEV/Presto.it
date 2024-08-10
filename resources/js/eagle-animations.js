const eagle = document.querySelector("#eagle");
const eyes = document.querySelector("#eagle-eyes");
const bottom_wing = document.querySelector("#eagle-wing-bottom");
const upper_wing = document.querySelector("#eagle-wing-upper");
const wings = [upper_wing, bottom_wing];

const email_field = document.querySelector("input[type='email']");
const name_field = document.querySelector("input[name='name']");
const name_fields = [email_field, name_field];

const visibility_toggle = document.querySelector("#visibility");
const password_field = document.querySelector('input[name="password"]');
const password_confirmation_field = document.querySelector('input[name="password_confirmation"]');
const password_fields = [password_field, password_confirmation_field];

let wing_status = "HIDDEN"; // VISIBLE; HIDDEN


// CONFIG
const MAX_TRANSLATE_VALUE_EYES = 3.75;
const ANIMATION_TIME = 200;


// Functions

function numericValue(value){
    return parseFloat(value.replace("%",""));
}

function showPassword(){
    visibility_toggle.src = "./asset/icons/visibility-off.svg"
    password_field.type = "text";
    password_confirmation_field.type = "text";
}

function hidePassword(){
    visibility_toggle.src = "./asset/icons/visibility-on.svg"
    password_field.type = "password"
    password_confirmation_field.type = "password"
}

function togglePasswordVisibility(){
    
    if(password_field.type == "password"){
        showPassword();
    }else{
        hidePassword();
    }

}

function setEyesPos(e){
    // let {length} = email_field.value;
    let {length} = e.target.value;
    
    let newPos = ((length / 8)-1) + "%";

    if(numericValue(newPos) <= MAX_TRANSLATE_VALUE_EYES){
        eyes.style.translate = newPos.toString();
    }else{
        eyes.style.translate = MAX_TRANSLATE_VALUE_EYES + "%";
    }

}

function setWingsPos(){
    
    wings.forEach(wing =>{
        wing.style.rotate = "0deg";
    })
    setTimeout(() => {
        wing_status = "VISIBLE"
    }, ANIMATION_TIME);

}

function unsetWingsPos(){
    wing_status = "HIDDEN"

    unsetUpperWingPos()

    setTimeout(() => {
        wings.forEach(wing =>{
            wing.style.rotate = "90deg";
        })
    }, ANIMATION_TIME);
    
}


function setUpperWingPos(){
    let deg, translate;
    
    deg = "-30deg";
    translate = "3rem";
    
    upper_wing.style.rotate = deg;
    upper_wing.style.translate = translate;
    setUpperWingOrigin()
}

function unsetUpperWingPos(){
    let deg, translate;

    deg = "0deg";
    translate = "0";

    upper_wing.style.translate = translate;
    upper_wing.style.rotate = deg;

    setTimeout(() => {
        unsetUpperWingOrigin()
    }, ANIMATION_TIME);

}

function setUpperWingOrigin(){
    upper_wing.style.transformOrigin = "bottom left";
}

function unsetUpperWingOrigin(){
    upper_wing.style.transformOrigin = "top left";
}

function toggleUpperWingPos(){

    if(wing_status == "VISIBLE"){
        if(password_field.type == "text"){
            setUpperWingPos()
        }else{
            unsetUpperWingPos()
        }
    }else{
        setTimeout(() => {
            if(password_field.type == "text"){
                setUpperWingPos()
            }else{
                unsetUpperWingPos()
            }
        }, ANIMATION_TIME);
    }

}


// Startup
if(window.location.pathname == "/login" || window.location.pathname == "/register"){



    // Email

    name_fields.forEach(field => {

        field.addEventListener("focus", (e)=>{
            setEyesPos(e)
        })
    
        field.addEventListener("blur", ()=>{
            eyes.style.translate = ""
        })
    
        field.addEventListener("input", (e)=>{
            setEyesPos(e)
        });        
    });

    //  Password

    password_fields.forEach(pass_field => {
        
            pass_field.addEventListener("focus", ()=>{
                if(wing_status == "HIDDEN"){
                    setWingsPos();
                }
                
            })
    });


    // Visibility

    visibility_toggle.addEventListener("click", ()=>{
        
        togglePasswordVisibility()
        setWingsPos()
        toggleUpperWingPos()
    }) 


    
    document.body.addEventListener("click",function(e){
        const CONDITION = e.target.name != "password" && e.target.name != "password_confirmation" && e.target.tagName != "LABEL" && e.target.id != "visibility";

        if(CONDITION){
            if(wing_status == "VISIBLE"){
                unsetWingsPos()
            }
            hidePassword()
        }
    });

    wings.forEach(wing => {
        wing.style.transformOrigin = "top left"
    });
}