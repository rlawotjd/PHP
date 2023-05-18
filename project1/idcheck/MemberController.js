
@Controller
public class MemberController {
	
	@Autowired
	private MemberService memberService;
	
	
		//아이디 중복체크
		@PostMapping("/idCheck")
		@ResponseBody
		public int idCheck(@RequestParam("id") String id) {
			
			int cnt = memberService.idCheck(id);
			return cnt;
			
		}
		
	
}