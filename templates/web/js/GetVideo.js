const fetch = require('node-fetch')

let last = {},
link;

const { last }= await fetch('https://www.googleapis.com/youtube/v3/search?key=AIzaSyB5Dyo4F_7fylenLYa0MPjk4itYhUe8Qd0&channelId=UCYXoautmTvZFuU1Lj6XLJ8Q&part=snippet,id&order=date&maxResults=1').then(r=>r.json())


const embed = new MessageEmbed()
  .setTitle(`${last.snippet.title}`)
  .setURL(`https://www.youtube.com/watch?v=${last.id.videoId}`)
  .setDescription(`${last.snippet.description}`)
  .setImage(`${last.snippet.thumbnails.high.url}`)
  .setTimestamp();

  .addField('🖼️ Siga no Instagram!','[@Brito](https://instagram.com/marcos.britojr)')
