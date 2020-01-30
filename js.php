<!doctype html>
<html>
    <head>
        <script>
            function myFunction() {
                document.getElementById("demo").innerHTML="a paragraph changed. this is just a demo page.";
                demo.style.border="1px solid #1e0633"; demo.style.background="#1e0633";demo.style.color="white";
                demo.style.padding="8px 8px 8px 8px"; 
                document.getElementById("button").style.display="none";
            }
        </script>
    </head>
    
    <body>
        <fieldset style="background: #1e0633; text-align: center;">
            <div style="color: white">
                <h4> MURPHY NEWS POINT & BUSINESS PLATFORM</h4>
                <p id="demo">murphy nets is a number news network in west Africa... to be part of 2020 adventure.<br>
                    terms and conditions applied</p>
                <button id="button" type="button" onclick="myFunction()">click to see how to apply</button>
            </div>
        </fieldset>
    </body>
</html>