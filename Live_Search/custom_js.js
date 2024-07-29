function load_search()
{
		var search = document.getElementById("search").value;
		if(search === '')
		{
			
			loadDiv();
			return false;
		}
		else{
			
			fetch('search_JS.php?search= '+search)
			.then((response) => response.json())
			.then((data)=>{
				var div1 = document.getElementById("main");
				if(data['empty']){
					div1.innerHTML = "<h1>No Record Found.</h1>";
					}
				else
				{
					var div2 = ' ';
					for(var i in data)
					{
						div2 += `<div class="col-md-3" id="main">
            <div class="card" style="width: 18rem;">
          <img src="images/${data[i].std_image}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">${data[i].std_name}</h5>
           <p class="card-text">${data[i].std_sub}</p>
          </div>
          </div>`
						
					}
					div1.innerHTML = div2;
					
					
				}
				
				
				
				})
			
			
			}
		
		}