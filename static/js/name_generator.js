function generateVowel(){
			var vowel;
			var vowelPicker = (Math.floor(Math.random() * 5));
			switch(vowelPicker){
				case 0:
						vowel = 'a'; break;
				case 1:
						vowel = 'e'; break;
				case 2:
						vowel = 'i'; break;
				case 3:
						vowel = 'o'; break;
				case 4:
						vowel = 'u'; break;
			}
			//document.getElementById("generatedVowel").innerHTML = vowel;
			return vowel;
		}
		
		function generateConstonant(){
			var constonant;
			var letterPicker = (Math.floor(Math.random() * 16));
			switch(letterPicker){
				case 0:
						constonant = 'e'; break;
				case 1:
						constonant = 't'; break;
				case 2:
						constonant = 'n'; break;
				case 3:
						constonant = 's'; break;
				case 4:
						constonant = 'r'; break;
				case 5:
						constonant = 'h'; break;
				case 6:
						constonant = 'l'; break;
				case 7:
						constonant = 'd'; break;
				case 8:
						constonant = 'c'; break;
				case 9:
						constonant = 'm'; break;
				case 10:
						constonant = 'f'; break;
				case 11:
						constonant = 'p'; break;
				case 12:
						constonant = 'g'; break;
				case 13:
						constonant = 'w'; break;
				case 14:
						constonant = 'y'; break;
				case 15:
						constonant = 'b'; break;
			}
			//document.getElementById("generatedConstonant").innerHTML = constonant;
			return constonant;
		}
		
		function generateSyllable(){
			var result = "";
			var holder = "";
			holder = generateConstonant();

			result = result + holder;
			holder = generateVowel();

			result = result + holder;
			holder = generateConstonant();

			result = result + holder;
			
			//document.getElementById("generatedSyllable").innerHTML = result;
			return result;
		}
		
		function generateName(){
			var name = "";

			name = name + generateSyllable();
			name = name + generateSyllable() + " ";
			name = name + generateSyllable();
			name = name + generateSyllable();
			
			document.getElementById("generatedName").innerHTML = name;
			return name;
		}