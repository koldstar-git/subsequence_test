<html>
<head>
    <script>
        function renderInputs(el)
        {
            var n = el.value && parseInt(el.value, 10);
            if(isNaN(n))
                {
                    
                    return ;
                }
                         
            var input;
            var parent = document.getElementById("parent");
  
            cleanDiv(parent);
            for(var i=0; i<n; i++)
            {
                input = document.createElement('input');
                input.setAttribute('type', 'text');
                input.setAttribute('name', 'str[]');
                parent.appendChild(input);
            }
        
    
        
        }

        function cleanDiv(div)
        {
            div.innerHTML = ''; 
        }
    </script>
</head>

<body>
    <form action="{{url('test')}}" method="post">
        @csrf
        <table>
            <tr>
                <th><label>Virus Composition</label></th>
                <th><input type="text" name="str2" required></th>
            </tr>
            <tr>
            <th>
            <label>Enter Number Of People</label>
            </th>
            <th>
            <input type="text" onchange="renderInputs(this)" required/>
            </th>
            </table>
            <div id="parent">

                <input type="submit" >
            </div>
            <br/><br/><br/>
        <input type="submit">
    </form>
</body>
</html>


