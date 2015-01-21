
        var main = function(){
            "use strict";
                
            var toDos = [
                "Finish writing the book",
                "Take Gracie to the park",
                "Answer emails",
                "Prep for Monday's class",
                "Make up some new Todos",
                "Get groceries"
            ];
            // ... Other tab related stuff. 
            var tabNumber;
            
            

            $(".tabs a span").toArray().forEach(function (element) {
                var $element = $(element);
                
                // create a click handler for this element
                $(element).on("click", function () {
                    
                    var $content,
                        $input,
                        $button,
                        $removeButton,
                        i;
                    
                    // since we're using the jQuery version of element,
                    // we'll go ahead and create a temporary variable
                    // so we don't need to keep recreating it.
                    
                    $(".tabs a span").removeClass("active");
                    $(element).addClass("active");
                    $("main .content").empty();
                    
                    if ($element.parent().is(":nth-child(1)")) {
                        // newest first , so we have to go through t
                        // the array backwars
                        $content = $("<ul>");
                        
                        for(i = toDos.length-1; i >= 0; i--){
                            $content.append($("<li>").text(toDos[i]), ("<button>x</button>"));
                        
                        }
                        $('button').on('click', function(){
                        $(this).remove()
                        alert("hi");
                        });
                    }
                    else if ($element.parent().is(":nth-child(2)")) {
                        $content = $("<ul>");
                        toDos.forEach(function (todo) {
                        $content.append($("<li>").text(todo));
                        });
                        console.log("Second tab clicked!");
                    }
                    else if ($element.parent().is(":nth-child(3)")) {
                        // input a new to-do
                        $input = $("<input>"),
                        $button = $("<button>").text("+");
        
                        $button.on("click", function () {
                            if ($input.val() !== "") {
                                toDos.push($input.val() )+ "<button>x</button>";
                                $input.val("");
                            }
                        });
                        console.log("Third tab clicked!");
                         $content = $("<div>").append($input).append($button);
                    /* Alternatively append() allows multiple arguments so the above
                     can be done with $content = $("<div>").append($input, $button); */
                    }
                    
                    
                    
                    $("main .content").append($content);
                    return false;
                });
            });
             $(".tabs a:first-child span").trigger("click");
            /*
             *
            for(tabNumber = 1; tabNumber <= 3; tabNumber++){
                var tabSelector = ".tabs a:nth-child("+ tabNumber + ") span";
                $(tabSelector).on("click", function(){
                    $(".tabs span").removeClass("active");
                    $(tabSelector).addClass("active");
                    $("main .content").empty();                    
                    return false; 
                });
            
            }
            $(".tabs a:nth-child(1)").on("click",function(){
                //make all the tabs active
                $(".tabs span").removeClass("active");
                
                // make the first tab active
                $(".tabs a:nth-child(1) span").addClass("active");
                
                // empty the main content so we can recreate it
                $("main .content").empty();
                
                // return false so we don't follow the link
                return false;
            });
            
            $(".tabs a:nth-child(2)").on("click",function(){
                $(".tabs span").removeClass("active");
                $(".tabs a:nth-child(2) span").addClass("active");
                $("main .content").empty();
                return false;
            });
        
            $(".tabs a:nth-child(3)").on("click", function(){
               $(".tabs span").removeClass("active");
               $(".tabs a:nth-child(2) span").addClass("active");
               $("main .content").empty();
               return false;
            });*/
    };
        $(document).ready(main);
