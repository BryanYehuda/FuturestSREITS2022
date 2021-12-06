const vm = new Vue({
	el: "#section",
	data: {
		jumbotron: {
			title: "FUTUREST 2022",
			description:
				"Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem odit assumenda amet totam vitae, vero aspernatur deleniti quae voluptatibus, ut quod soluta omnis recusandae vel quasi aliquam libero ratione dolores doloribus quia praesentium. Ipsum, voluptas!",
		},
		apaSaja: [
			{
				title: "National Essay Competition",
				icon: "bi bi-newspaper",
				description:
					"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, tempore.",
			},
			{
				title: "RE Innovation Brainstorm Competition",
				icon: "bi bi-trophy",
				description:
					"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime, tempore.",
			},
		],
		timeline: [
			{
				date: "20 February 2022",
				description:
					"Lorem ipsum dolor sit amet consectetur adipisicing elit. Est eius libero culpa quos repellat? Distinctio.",
			},
			{
				date: "5 March 2022",
				description:
					"Lorem ipsum dolor sit amet consectetur adipisicing elit. Est eius libero culpa quos repellat? Distinctio.",
			},
			{
				date: "19 March 2022",
				description:
					"Lorem ipsum dolor sit amet consectetur adipisicing elit. Est eius libero culpa quos repellat? Distinctio.",
			},
			{
				date: "4 April 2022",
				description:
					"Lorem ipsum dolor sit amet consectetur adipisicing elit. Est eius libero culpa quos repellat? Distinctio.",
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
					"Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo quis at et omnis similique incidunt nostrum consectetur maxime, tempora, quo aliquam deserunt odit sit harum deleniti repellat voluptatum ratione culpa veniam laborum sint. Quaerat et quam sit, autem, atque ad corrupti magni iusto quas dolor qui odit possimus iure pariatur!",
			},
			{
				id: "headingTwo",
				question: "How many prize i will get? ",
				dataBsTarget: "#collapseTwo",
				ariaControls: "collapseTwo",
				ariaExpanded: "false",
				collapsed: "collapsed",
				show: "",
				answer:
					"Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo quis at et omnis similique incidunt nostrum consectetur maxime, tempora, quo aliquam deserunt odit sit harum deleniti repellat voluptatum ratione culpa veniam laborum sint. Quaerat et quam sit, autem, atque ad corrupti magni iusto quas dolor qui odit possimus iure pariatur!",
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
					"Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo quis at et omnis similique incidunt nostrum consectetur maxime, tempora, quo aliquam deserunt odit sit harum deleniti repellat voluptatum ratione culpa veniam laborum sint. Quaerat et quam sit, autem, atque ad corrupti magni iusto quas dolor qui odit possimus iure pariatur!",
			},
			{
				id: "headingFour",
				question: "The benefits that i will get?",
				dataBsTarget: "#collapseFour",
				ariaControls: "collapseFour",
				ariaExpanded: "false",
				collapsed: "collapsed",
				show: "",
				answer:
					"Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo quis at et omnis similique incidunt nostrum consectetur maxime, tempora, quo aliquam deserunt odit sit harum deleniti repellat voluptatum ratione culpa veniam laborum sint. Quaerat et quam sit, autem, atque ad corrupti magni iusto quas dolor qui odit possimus iure pariatur!",
			},
		],
	},
});
