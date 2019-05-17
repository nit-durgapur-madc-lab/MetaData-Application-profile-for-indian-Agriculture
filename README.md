      Prerequisites
      
1. XAMPP for using Apache HTTP Server (see their installation guide).
2. open refine version 3.0-rc.1 with RDF extension (see their installation guide )
3. GraphDB (you can use free version) (see their installation guide)
4. Any Text Editor (eg. Notepad++)
5. Any browser to execute the php code (eg. Google Chrome).

     Running the tests
     
1. run Apache http server inside xampp.
2. Download the code inside "C:\xampp\htdocs\foldername" if your XAMPP is install inside C drive. foldername is the name of folder where      you will keep all php file
3. change the csv file location in the form1.php in the comment //define the location of each csv file according to your preference.
   set your own location where the csv file is to be created after submitting the form.
4. open browser and go to the url "http://localhost:8080/foldername/" and run the person.php and start filling the form keep on clicking      the next button and finally click on submit.
5. Rules for filling the form...
   a> if the farmer is dependent for you current entry. Then Next entry of person is: form should be non-farmer.
6. run openrefine, it will automatically open in browser with the url 127.0.0.1:3333.
7. click on left side named with create Project. upload all csv data file from your location as you have set in step 3.
 
 example of data conversion after step 7..
 
1. open any file let say person csv by clicking on open project in the top left side of your screen .
2. click on RDF extension  then go to edit RDF.
3. click on add prefix and add all prefix by looking at the used namespace in the constraint matrix of entity person.
4. set the person count cell as rdf:type and used all other property name by looking constraint matrix and write in the property.
   it will become foaf:name, dbpedia-owl:age and so on.
5. whereever the count value coming for a particular entity you set that property to ia:is_a.
6. set the person count as uri and in the base uri set it as http://www.example.org/Person/ click on save and ok.
7. click on the arrow of the collumn where count is present except for person i.e for a class which you are converting the data.
8. click on edit cell theen tranform. it will open a new window where you write the expression for each collumn  for eample Agriculture machine count will be	"http://www.example.org/AgricultureMachine/"+value.
9. after changing all the count value  go to edit RDF section click on the count name then click on set as URI in top . now export it as a turtle file.
10. similarly convert all the file to rdf and export it as turtle format.

instruction for GraphDB...

1. open GraphDB it will automatically open in local browser at http://localhost:7200/ click on create new repository and give a name and   create it.
2. import all turtle(ttl) file (from step 10 in last instruction) in Graph DB.
3. click on explore on the left side go to graph overview-->the default graph---> Download as RDF/XML .
4. open the https://www.w3.org/RDF/Validator/ and pased that RDF/XML in the select graph format as PNG link and click on parse RDF it    will show a link from where you can download the grpah structure of your dataset if it is disconnected then it is wrong it should be connected.
5. now open SPARQL and execute some query.(see the SPARQL tutorial at https://jena.apache.org/tutorials/sparql.html)



 
