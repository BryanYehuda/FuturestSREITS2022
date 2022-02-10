const vm = new Vue({
	el: "#section",
	data: {
		jumbotron: {
			title: "EXPLORE OUR EVENTS!",
			description:
				"Futurest 2022 has several events, both competitive and in the form of talk shows. Get to know the 7 events held by Futurest by clicking the button below.",
		},
		competitions: [
			{
				title: "National Essay Competition",
				icon: "bi bi-newspaper",
				description:
					"The National Essay Competition is intended for undergraduate and vocational students from universities all over Indonesia to apply their innovative ideas and solutions to the renewable energy sector that contribute to a more sustainable future.",
        link: "essay",
			},
			{
				title: "RE Innovation Brainstorm Competition",
				icon: "fas fa-trophy",
				description:
					"Renewable Energy Innovation Brainstorm is a national paper competition that encourages undergraduate and vocational students to conduct scientific approaches to develop existing or create new fascinating innovations in order to reduce greenhouse gases (GHG) emissions and sustainably solve energy issues.",
        link: "re-innovation",
			},
		],
    events: [
      {
        title: "Grand Talk Show",
        icon: "fas fa-users",
        description: "Grand talk show is a national scale talkshow as the opening event of FUTUREST 2022 which contains presentations and discussion of interesting material about renewable energy, especially the urgency of mitigating climate change and the role of future leaders (students) in tackling climate issues given by speakers who are experts in their fields.",
        link: "grand-talkshow"
      },
      {
        title: "RE 101",
        icon: "bi bi-person-video3",
        description: "Renewable Energy 101 (RE 101) is a webinar series that presents interesting themes with 4 different pathways, namely wind, solar, geothermal, and hydro whose material presentation is given from various points of view.",
        link: "re-101",
      },
      {
        title: "Final Talkshow",
        icon: "fas fa-user-friends",
        description: "Final talk show is one of the last series of talk shows that presents interesting themes and speakers as the closing of the FUTUREST 2022 event.",
        link: "final-talkshow"
      },
      {
        title: "Climate Change Community",
        icon: "fas fa-share-square",
        description: "Social Project is an event that provides a forum for prospective delegates which are chosen students from ITS to express their ideas as climate activists that are applicable to renewable energy and can have a big impact on the community.",
        link: "climate-change-community"
      },
      {
        title: "Awarding Night",
        icon: "fas fa-award",
        description: "Awarding Night  is the culmination of a series of events at FUTUREST which includes awarding prizes to the finalists who won the competition.",
        link: "awarding-night",
      },
    ],
		timeline: [
      {
				date: "3-14 January 2022",
				description:
					"Grand Talkshow (Finished)",
			},
      {
				date: "January-February 2022",
				description:
					"Open recruitment & selected delegates of Climate Change Community (Social Projects)",
			},
      {
				date: "1 February – 13 March 2022",
				description:
					"Preliminary Round Registration of RE Innovation Brainstorm Competition",
			},
			{
				date: "14 March – 1 May 2022",
				description:
					"Open Submission of Essay National competitions",
			},
      {
				date: "12 June 2022",
				description:
					"Awarding night",
			},
		],
		caraDaftar: [
			{
				number: 1,
				description:
					". Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, aperiam?",
			},
			{
				number: 2,
				description:
					". Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, aperiam?",
			},
			{
				number: 3,
				description:
					". Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, aperiam?",
			},
			{
				number: 4,
				description:
					". Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, aperiam?",
			},
		],
		pertanyaan: [
			{
				id: "headingOne",
				question: "How to regist?",
				dataBsTarget: "#collapseOne",
				ariaControls: "collapseOne",
				ariaExpanded: "true",
				collapsed: "",
				show: "show",
				answer:
					"You can register by visiting the details page of our events and then pressing the register button on the page. Or you can click the login button above, then click don't have an account, then click the appropriate event you want to register. Please note that one account can only register for one event",
			},
			{
				id: "headingTwo",
				question: "Will I get a prize?",
				dataBsTarget: "#collapseTwo",
				ariaControls: "collapseTwo",
				ariaExpanded: "false",
				collapsed: "collapsed",
				show: "",
				answer:
					"Of course, we provide prizes for the winners in every competition we hold.",
			},
			{
				id: "headingThree",
				question: "Online or offline?",
				dataBsTarget: "#collapseThree",
				ariaControls: "collapseThree",
				ariaExpanded: "false",
				collapsed: "collapsed",
				show: "",
				answer:
					"This event is held online.",
			},
			// {
			// 	id: "headingFour",
			// 	question: "The benefits that i will get?",
			// 	dataBsTarget: "#collapseFour",
			// 	ariaControls: "collapseFour",
			// 	ariaExpanded: "false",
			// 	collapsed: "collapsed",
			// 	show: "",
			// 	answer:
			// 		"Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo quis at et omnis similique incidunt nostrum consectetur maxime, tempora, quo aliquam deserunt odit sit harum deleniti repellat voluptatum ratione culpa veniam laborum sint. Quaerat et quam sit, autem, atque ad corrupti magni iusto quas dolor qui odit possimus iure pariatur!",
			// },
		],
	},
});
