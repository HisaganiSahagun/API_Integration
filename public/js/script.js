const url = 'https://google-translate113.p.rapidapi.com/api/v1/translator/text';
const apiKey = 'ab0125027dmsh4967d87250a17a2p1c205ajsn699182ad48d6';

document.getElementById('translate-btn').addEventListener('click', translateText);
document.getElementById('swap-btn').addEventListener('click', swapLanguages);

async function translateText() {
    const fromLanguage = document.getElementById('from-language').value;
    const toLanguage = document.getElementById('to-language').value;
    const text = document.getElementById('source-text').value;

    const options = {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
            'X-RapidAPI-Key': apiKey,
            'X-RapidAPI-Host': 'google-translate113.p.rapidapi.com'
        },
        body: new URLSearchParams({
            from: fromLanguage,
            to: toLanguage,
            text: text
        })
    };

    try {
        const response = await fetch(url, options);
        const result = await response.json(); 
        const translatedText = result.trans; 
        document.getElementById('translated-text').innerText = translatedText;
    } catch (error) {
        console.error(error);
    }
}

function swapLanguages() {
    const fromLanguage = document.getElementById('from-language').value;
    const toLanguage = document.getElementById('to-language').value;

   
    document.getElementById('from-language').value = toLanguage;
    document.getElementById('to-language').value = fromLanguage;
}
