import { useUserContext } from "../contexts/UserContext";
import { User } from "./User";



export function Users() {
  const { userList, load, error } = useUserContext();

  if (load) {
    return <p>User betöltése...</p>;
  }
  if (error) {
    return <p>{error}</p>;
  }

  return (
    <table>
      {userList.map((user) => {
        return <User user={user} key={user.id} />;
      })}
    </table>
  );
}