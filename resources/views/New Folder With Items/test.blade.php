<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <TITLE>The Canvas Tag</TITLE>
    </HEAD>

    <BODY>

    <HEADER>
        <P>Press TAB to begin, W, A, S, D keys to move</P>
    </HEADER>

    <SECTION style="border-style: solid; border-width: 2px; width: 500px;">
        <CANVAS WIDTH="500" HEIGHT="400" ID="canvas_1" tabindex="0">
            Canvas tag not supported
        </CANVAS>
    </SECTION>

    <SCRIPT>
        var canvas = document.getElementById("canvas_1");
        canvas.addEventListener('keydown', doKeyDown, true);

        canvas_context = canvas.getContext("2d");
        canvas_context.fillRect(100, 100, 50, 30);

        var x = 100;
        var y = 100;

        function doKeyDown(e){

            //====================
            //  THE W KEY
            //====================
            if (e.keyCode == 87) {
                clearCanvas();
                y = y - 10;
                canvas_context.fillRect(x, y, 50, 30);
            }

            //====================
            //  THE S KEY
            //====================
            if (e.keyCode == 83) {
                clearCanvas();
                y = y + 10;
                canvas_context.fillRect(x, y, 50, 30);
            }

            //====================
            //  THE A KEY
            //====================
            if (e.keyCode == 65) {
                clearCanvas();
                x = x - 10;
                canvas_context.fillRect(x, y, 50, 30);
            }

            //====================
            //  THE D KEY
            //====================
            if (e.keyCode == 68) {
                clearCanvas();
                x = x + 10;
                canvas_context.fillRect(x, y, 50, 30);
            }

        }

        function clearCanvas() {
            canvas.width = canvas.width;
        }


    </SCRIPT>

    </BODY>
</HTML>
