//To add this mod to your server:

{
	name: "BAM",
	section: "Other Metagames", //Change this if you like

	mod: 'BAM Mod',
	ruleset: ['Sleep Clause Mod', 'Species Clause','BAM'],
	banlist: ['Uber','OU','UU','RU','NU','PU','NFE','LC','CAP','LC Uber']
},

//Add this to rulesets.js in data folder.

BAM: {
	effectType: 'Rule' //may need more stuff here later
}, //no comma if last ruleset in file
